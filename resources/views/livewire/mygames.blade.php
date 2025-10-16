<x-default-container addClass="flex flex-col">

    <x-gradient-box hClass="h-full" wClass="w-full" radiusClass="rounded-(--gradientBoxRadius)" addClass="grow pb-4">

        <div id="banner" class="w-full h-[200px] bg-color1/30"></div>

        <div id="pfpAndName" class="relative bottom-[40px] mbl:bottom-[50px] 
            px-[30px] mbm:px-[40px] sm:px-[60px] xl:px-[100px] w-full
            flex flex-row h-[80px] mbl:h-[100px]"
            {{-- w-[calc(95%-30px)] mbm:w-[calc(100%-40px)] sm:w-[calc(100%-60px)] xl:w-[calc(100%-100px)] --}}
            >
                <div id="pfp" class="shrink-0 size-[80px] mbl:size-[100px] bg-color3 rounded rounded-[50%]"></div>

                <div class="grow">
                    <p id="name" class="h-[38px] mbl:h-[48px] overflow-auto text-start text-base relative wrap-anywhere
                    top-[42px] mbl:top-[52px] ps-2 mbl:text-lg sm:ps-4 xl:ps-6">
                        countless
                    </p>
                </div>
                
        </div>

        <div id="restOfStuff" class="px-2 flex flex-col gap-y-2 
        md:gap-y-4 md:px-4 ">

            <div class="flex flex-col gap-y-2 md:gap-y-4 lg:flex-row lg:gap-x-2 lg:h-[350px] xl:h-[400px]">

                <x-gradient-inner-box 
                hClass="min-h-[140px]" wClass="w-full" radiusClass="rounded-(--gradientBoxInnerRadius)" 
                addClass="flex flex-col gap-y-1 pb-1 lg:w-[45%] scrollable">

                    <div id="textBox1" class="text-start ps-6 pt-1.25">
                        <p class="text-xs">About Me:</p>
                    </div>

                    <textarea class="grow text-base px-2 resize-none"
                        >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend eleifend felis, et posuere augue feugiat non. Ut eu enim semper, convallis magna et, cursus turpis. Vivamus at vestibulum ligula. Vestibulum vel faucibus nulla, in gravida dui. Aliquam laoreet ac nibh id mollis. Vivamus at quam ac elit imperdiet suscipit. Maecenas tristique justo eget sem egestas dictum. Fusce et scelerisque orci. Vivamus vitae lobortis massa. Phasellus nisl lectus, dictum sit amet turpis eget, maximus pretium lectus. Donec augue leo, finibus nec elit id, mollis tincidunt nunc. Nam non rhoncus elit, vel tristique augue. In at imperdiet velit, et semper orci. Pellentesque rutrum, arcu et accumsan faucibus, enim enim molestie risus, at feugiat velit neque in lacus.

                        Duis faucibus massa in congue sodales. Vivamus accumsan neque ac est mollis, ut commodo metus aliquet. Cras gravida tellus commodo erat interdum, vel aliquet ligula porta. Nullam fermentum, sem vel consequat scelerisque, ex nunc rutrum nibh, ut laoreet eros neque a tellus. Curabitur nec dui dolor. Vivamus mollis finibus eleifend. Proin eget justo in metus vestibulum consequat a vel odio. Mauris varius ultrices diam. Nam purus arcu, facilisis ut augue a, efficitur fringilla lorem. In tortor risus, gravida sit amet ipsum porttitor, accumsan egestas nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla quis hendrerit lacus.

                        Nulla feugiat lacus leo, sed efficitur leo faucibus ac. Donec sem quam, bibendum eu est in, tincidunt accumsan sapien. Proin leo lectus, tempus nec molestie sed, malesuada at nisl. Nullam vulputate quam nisl, in efficitur elit blandit vel. Nunc vel purus quam. Mauris at lacus tincidunt sem feugiat mollis. Nulla eget est quis nulla semper dignissim in ut libero.

                        In ornare non nunc non maximus. Etiam eget leo sollicitudin, aliquet mauris at, pharetra magna. Quisque luctus consequat justo, sodales pellentesque diam interdum condimentum. Phasellus vitae placerat felis. Quisque euismod facilisis justo viverra mollis. Nunc ultricies cursus nisi viverra tincidunt. Etiam rhoncus facilisis tincidunt. Fusce ac ultrices ex, vitae bibendum libero.

                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent sit amet pretium libero, sit amet blandit orci. Donec at odio eu diam auctor semper ut eget dui. Nam nec pulvinar sem, sit amet maximus enim. Maecenas sodales libero non velit dignissim finibus. Fusce pulvinar non ex eget mattis. Ut metus lorem, luctus sit amet imperdiet non, ornare in eros. Integer ut ipsum non ante ultrices ullamcorper ut nec purus. Proin dictum ipsum sit amet aliquam dictum. Proin consectetur congue diam, eget interdum arcu gravida ac. Integer molestie nulla sit amet mauris pellentesque, quis ullamcorper lacus gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque cursus eleifend risus at consectetur. Phasellus rhoncus justo vitae nisi sodales pellentesque.
                    </textarea>


                </x-gradient-inner-box>

                <x-gradient-inner-box 
                hClass="h-[300px] lg:h-auto" wClass="w-full" radiusClass="rounded-(--gradientBoxInnerRadius)" 
                addClass="flex flex-col lg:w-[55%]">
                    <div id="textBox1" class="text-start ps-6 pt-1.25">
                        <p class="text-xs">Your Activity:</p>
                    </div>

                    <div class="grow flex flex-col justify-center items-center">

                        <p class="text-color3/40">No data to show</p>

                    </div>

                </x-gradient-inner-box>

            </div>

            <button
            class="bg-color1 rounded-(--bigButtonRadius) h-[50px] md:h-[60px] hover:shadow-md" wire:click="redirectToSync"
            >Auto Sync Settings</button>

            <button
            class="bg-color1 rounded-(--bigButtonRadius) h-[50px] md:h-[60px] hover:shadow-md" 
            >Add New Game</button>

            <div id="newGame" class="hidden"></div>

            <x-gradient-inner-box hClass="h-[500px]" wClass="" radiusClass="rounded-(--gradientBoxInnerRadius)" 
            addClass=""></x-gradient-inner-box>
        </div>

    </x-gradient-box>

</x-default-container>