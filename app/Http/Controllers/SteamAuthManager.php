<?php

namespace App\Http\Controllers;

use App\Models\Syncs;
use App\Models\Games;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Livewire\SyncAuthenticatedPage;
use Illuminate\Support\Facades\Http;

class SteamAuthManager extends Controller
{
    
    public function attemptSteamAuth(Request $request) {
        return Socialite::driver('steam')->redirect();
    }

    public function callbackFromSteam(Request $request) {
        $user = Socialite::driver('steam')->user();

        $steam_id = $user->id;
        
        $sync = Syncs::where('user_id', $request->user()->id)->first();
        $sync->steam_id = $steam_id;
        $sync->save();

        $apiKey = env('STEAM_CLIENT_SECRET');

        $response = Http::get('http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=' . $apiKey . '&steamid=' . $steam_id . '&format=json&include_played_free_games=true');

        if ($response->ok()) {
            $json = $response->json()['response'];
            $gameCount = $json['game_count'];
            $games = $json['games'];

            // for ($i = 0; $i < $gameCount; $i++) {
            //     $appId = $games[$i]['appid'];
            // }

            $appidsFromApi = collect($games)->pluck('appid')->all();

            $gamesRows = Games::whereIn('steam_appid', $appidsFromApi)->get();
            $appidsPresent = $gamesRows->pluck('steam_appid')->all();

            $missingAppIds = array_diff($appidsFromApi, $appidsPresent);

            // foreach ($missingAppIds as $missingAppId) {
            //     // Insert a new row with the missing appid
            //     $game = new Games();
            //     $game->steam_appid = $missingAppId;
            //     $game->name = "";
            //     $game->description = "";
            //     $game->save();
            // }

            // dd(["appids" => $appids, "appidsPresent" => $appidsPresent]);

        }



        // $syncPageSteam = new SyncAuthenticatedPage();
        // return $syncPageSteam->render($request);

        return redirect()->route('steamSync')->with('steam_id', $user->id);
    }
}
