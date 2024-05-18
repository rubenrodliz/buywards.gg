@props(["data", "class"])
@vite(['/resources/css/summoner.css'])

@php
    $data = json_decode(str_replace("&quot;",'"',$data));
    if ($data->win=="true") {
        $color="kda_blue";
        $bgColor="bg-kda_blue";
        $win="Win";
    }else{
        $color="kda_red";
        $bgColor="bg-kda_red";
        $win="Lose";
    }
@endphp
<div class="bg-opacity-60 bg-bg_dark mt-[20px] border-primary border-2 p-2 rounded-xl flex justify-between text-$color h-fit {{ $class }}">
    <div class="flex w-[50%] items-center justify-center mx-auto gap-4">
        <x-performance-selector-button isSelected="true" name="Post game" />
        <x-performance-selector-button name="Performance" />
        <x-performance-selector-button name="Item Build" />
    </div>
</div>

<div class="bg-opacity-60 bg-bg_dark mt-[20px] border-kda_blue border-2 rounded-xl flex flex-col justify-between text-$color h-fit {{ $class }}">
        <div class="px-4 py-2 w-full flex justify-between">
            <div class="flex flex-row gap-2 text-text_light items-center">
                <div class="py-1 px-4 w-fit rounded-md bg-kda_{{$data->gameInfo->team1->win == "true" ? 'blue' : 'red'}} text-md font-semibold">
                    <p class="text-text_light">{{$data->gameInfo->team1->win == "true" ? 'Victoria' : 'Derrota'}}</p>
                </div>
                <p>({{$data->gameInfo->team1->side == "blue" ? "Blue" : "Red"}} side)</p>
            </div>
            <div class="flex flex-row gap-2 text-text_light items-center">
                <p>20</p>
                <p>/</p>
                <p class="text-kda_red">5</p>
                <p>/</p>
                <p>10</p>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex gap-1 items-center">
                    <img src="{{ asset('images/gameSVG/Tower.svg') }}" alt="Tower" class="aspect-square">
                    <p class="text-text_light">8</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/gameSVG/Inhibitor.svg') }}" alt="Inhibitor" class="aspect-square">
                    <p class="text-text_light">8</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex gap-1 items-center">
                    <img src="{{ asset('images/gameSVG/Baron.svg') }}" alt="Baron" class="aspect-square">
                    <p class="text-text_light">8</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/gameSVG/Herald.svg') }}" alt="Herald" class="aspect-square">
                    <p class="text-text_light">8</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/gameSVG/Drake.svg') }}" alt="Drake" class="aspect-square">
                    <p class="text-text_light">8</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex gap-1 items-center">
                    <img src="{{ asset('images/gameSVG/Gold.svg') }}" alt="Gold" class="aspect-square">
                    <p class="text-text_light">20.444</p>
                </div>
            </div>
        </div>
        <hr class="text-kda_blue">
        <div class="p-4 h-fit w-full">
            <div class="h-[35%] flex items-center justify-start gap-4 flex flex-col">
                @foreach ($data->gameInfo->team1->players as $player)
                <div class="flex justify-between w-full">
                    <div class="flex h-[35px] w-fit gap-2">
                        <div class="flex gap-2">
                            <img class="h-full" src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$player->champIcon}}.png" alt="" class="h-full rounded-lg">
                            <div class="h-full flex flex-col">
                                <img src="https://lolcdn.darkintaqt.com/cdn/spells/{{$player->summoner1Id}}" alt="summ1" class="h-[50%] rounded-sm">
                                <img src="https://lolcdn.darkintaqt.com/cdn/spells/{{$player->summoner2Id}}" alt="summ2" class="h-[50%] rounded-sm">
                            </div>
                        </div>
                        <div>
                            <p class="text-text_light">{{$player->riotIdGameName}} <span class="text-primary font-medium">#{{$player->riotIdTagline}}</span></p>
                        </div>
                    </div>
                    <div class="flex flex-col text-text_light h-[35px] items-center justify-center font-semibold">
                        <p class="">{{$player->kills}} / <span class="text-kda_red">{{$player->deaths}}</span> / {{$player->asists}}</p>
                        <p class="text-kda_blue">{{$player->kda}} KDA</p> {{-- ToDo: Change color depending on the value of KDA --}}
                    </div>
                    <div class="flex flex-col text-text_light h-[35px] items-center justify-center font-medium">
                        <p>{{$player->totalDamageDealtToChampions}}</p>
                        <p class="text-sm">DMG</p>
                    </div>
                    <div class="flex flex-col text-text_light h-[35px] items-center justify-center">
                        <p class="">{{$player->totalMinionsKilled}} CS ({{$player->miniosPerMinute}})</p>
                        <p class="text-kda_orange font-medium">{{$player->killParticipation}}% KP</p> {{-- ToDo: Change color depending on the value of KillParticipation --}}
                    </div>
                    <div class="flex items-center justify-start gap-1">
                        @foreach ($player->items as $item)
                            @if ($item != 0)
                                <img src="https://ddragon.leagueoflegends.com/cdn/14.9.1/img/item/{{ $item }}.png" alt="" class="h-[35px] rounded-lg">
                            @endif
                            @if ($item == 0)
                                <img src="{{ asset('images/vacio.svg') }}" alt="" class="h-[35px]">
                            @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</div>

<div class="bg-opacity-60 bg-bg_dark mt-[20px] border-kda_red border-2 rounded-xl flex flex-col justify-between text-$color h-fit {{ $class }}">
    <div class="px-4 py-2 w-full flex justify-between">
        <div class="flex flex-row gap-2 text-text_light items-center">
            <div class="py-1 px-4 w-fit rounded-md bg-kda_{{$data->gameInfo->team2->win == "true" ? 'blue' : 'red'}} text-md font-semibold">
                <p class="text-text_light">{{$data->gameInfo->team2->win == "true" ? 'Victoria' : 'Derrota'}}</p>
            </div>
            <p>({{$data->gameInfo->team2->side == "blue" ? "Blue" : "Red"}} side)</p>
        </div>
        <div class="flex flex-row gap-2 text-text_light items-center">
            <p>20</p>
            <p>/</p>
            <p class="text-kda_red">5</p>
            <p>/</p>
            <p>10</p>
        </div>
        <div class="flex items-center gap-4">
            <div class="flex gap-1 items-center">
                <img src="{{ asset('images/gameSVG/TowerRed.svg') }}" alt="Tower" class="aspect-square">
                <p class="text-text_light">8</p>
            </div>
            <div class="flex gap-2 items-center">
                <img src="{{ asset('images/gameSVG/InhibitorRed.svg') }}" alt="Inhibitor" class="aspect-square">
                <p class="text-text_light">8</p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="flex gap-1 items-center">
                <img src="{{ asset('images/gameSVG/BaronRed.svg') }}" alt="Baron" class="aspect-square">
                <p class="text-text_light">8</p>
            </div>
            <div class="flex gap-2 items-center">
                <img src="{{ asset('images/gameSVG/HeraldRed.svg') }}" alt="Herald" class="aspect-square">
                <p class="text-text_light">8</p>
            </div>
            <div class="flex gap-2 items-center">
                <img src="{{ asset('images/gameSVG/DrakeRed.svg') }}" alt="Drake" class="aspect-square">
                <p class="text-text_light">8</p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="flex gap-1 items-center">
                <img src="{{ asset('images/gameSVG/GoldRed.svg') }}" alt="Gold" class="aspect-square">
                <p class="text-text_light">20.444</p>
            </div>
        </div>
    </div>
    <hr class="text-kda_red">
    <div class="p-4 h-fit w-full">
        <div class="h-[35%] flex items-center justify-start gap-4 flex flex-col">
            @foreach ($data->gameInfo->team2->players as $player)
            <div class="flex justify-between w-full">
                <div class="flex h-[35px] w-fit gap-2">
                    <div class="flex gap-2">
                        <img class="h-full" src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$player->champIcon}}.png" alt="" class="h-full rounded-lg">
                        <div class="h-full flex flex-col">
                            <img src="https://lolcdn.darkintaqt.com/cdn/spells/{{$player->summoner1Id}}" alt="summ1" class="h-[50%] rounded-sm">
                            <img src="https://lolcdn.darkintaqt.com/cdn/spells/{{$player->summoner2Id}}" alt="summ2" class="h-[50%] rounded-sm">
                        </div>
                    </div>
                    <div>
                        <p class="text-text_light">{{$player->riotIdGameName}} <span class="text-primary font-medium">#{{$player->riotIdTagline}}</span></p>
                    </div>
                </div>
                <div class="flex flex-col text-text_light h-[35px] items-center justify-center font-semibold">
                    <p class="">{{$player->kills}} / <span class="text-kda_red">{{$player->deaths}}</span> / {{$player->asists}}</p>
                    <p class="text-kda_blue">{{$player->kda}} KDA</p> {{-- ToDo: Change color depending on the value of KDA --}}
                </div>
                <div class="flex flex-col text-text_light h-[35px] items-center justify-center font-medium">
                    <p>{{$player->totalDamageDealtToChampions}}</p>
                    <p class="text-sm">DMG</p>
                </div>
                <div class="flex flex-col text-text_light h-[35px] items-center justify-center">
                    <p class="">{{$player->totalMinionsKilled}} CS ({{$player->miniosPerMinute}})</p>
                    <p class="text-kda_orange font-medium">{{$player->killParticipation}}% KP</p> {{-- ToDo: Change color depending on the value of KillParticipation --}}
                </div>
                <div class="flex items-center justify-start gap-1">
                    @foreach ($player->items as $item)
                        @if ($item != 0)
                            <img src="https://ddragon.leagueoflegends.com/cdn/14.9.1/img/item/{{ $item }}.png" alt="" class="h-[35px] rounded-lg">
                        @endif
                        @if ($item == 0)
                            <img src="{{ asset('images/vacio.svg') }}" alt="" class="h-[35px]">
                        @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
