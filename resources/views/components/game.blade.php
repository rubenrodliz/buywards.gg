@props(["summonerData"])
@vite(['/resources/css/summoner.css'])

@if (isset($summonerData["game"][10]["ownData"]))
    @php
        if ($summonerData["game"][10]["ownData"]['win']==true) {
            $color="kda_blue";
            $bgColor="bg-kda_blue";
            $win="Win";
        }else{
            $color="kda_red";
            $bgColor="bg-kda_red";
            $win="Lose";
        }
    @endphp

    <div {{ $attributes->merge(['class'=>"bg-opacity-60 bg-bg_dark border-$color border-2 rounded-xl flex justify-between text-$color"]) }}>
        <div class="w-8 {{$bgColor}} rounded-l-[10px]"></div>
        <div class="w-[90%] flex flex-wrap justify-around">
            <div class="flex flex-wrap justify-center">
                <div class="self-center text-text_light text-[16px] font-medium">
                    <h2 class="text-[20px] font-bold">{{$summonerData['generalGameData']['gameMode']}}</h2>
                    <p>{{$summonerData['generalGameData']['gameCreation']}}</p>
                    <hr class="text-{{$color}} my-[10px]">
                    <p><span class="text-{{$color}}">{{$win}}</span> {{$summonerData['generalGameData']['gameDuration']}}</p>
                    {{-- <p>{{$data->ownGameInfo->tier}} {{$data->ownGameInfo->rank}}</p> --}}
                </div>
                <div class="self-center text-text_light text-[16px] font-medium flex flex-wrap items-center justify-center">
                    <div class="w-[70px] h-[50%]">
                        <img src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$summonerData["game"][10]["ownData"]["championId"]}}.png" alt="" class="rounded-lg">
                    </div>
                    <div class="ml-[5%] h-fit flex">
                        <div class="flex">
                            <div>
                                <img src="https://lolcdn.darkintaqt.com/cdn/spells/{{$summonerData["game"][10]["ownData"]["summoner1Id"]}}" alt="rune" class="w-[35px] rounded-lg">
                                <img src="https://lolcdn.darkintaqt.com/cdn/spells/{{$summonerData["game"][10]["ownData"]["summoner2Id"]}}" alt="rune" class="w-[35px] rounded-lg">
                            </div>
                        </div>
                        <div class="ml-[15px]">
                            <h2 class="text-[20px]">{{$summonerData["game"][10]["ownData"]["kills"]}} / <span class="text-kda_red">{{$summonerData["game"][10]["ownData"]["deaths"]}}</span> / {{$summonerData["game"][10]["ownData"]["assists"]}}</h2>
                            <p class="text-[16px] text-{{$color}}">{{$summonerData["game"][10]["ownData"]["kda"]}} KDA</p>
                            <p class="text-[16px]">{{$summonerData["game"][10]["ownData"]["totalMinionsKilled"]}} CS ({{$summonerData["game"][10]["ownData"]["minionsPerMinute"]}})</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap h-[35%] mt-2 items-center justify-start">
                        @foreach ($summonerData["game"][10]["ownData"]["items"] as $item)
                            @if ($item!=0)
                                <img src="https://ddragon.leagueoflegends.com/cdn/14.9.1/img/item/{{$item}}.png" alt="" class="h-[35px] rounded-lg">
                            @endif
                            @if ($item==0)
                                <img src="{{ asset('images/vacio.svg') }}" alt="" class="h-[35px]">
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap justify-center">
                <div class="m-6 w-[200px]">
                    @for ($i=0;5>$i;$i++)
                        <div class="flex items-center my-[2px] justify-start">
                            <img src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$summonerData["game"][$i]["championId"]}}.png" class="w-[30px] rounded-lg">
                            <p class="text-text_light text-ellipsis">{{$summonerData["game"][$i]["riotIdGameName"]}}#{{$summonerData["game"][$i]["riotIdTagline"]}}</p>
                        </div>
                    @endfor
                </div>
                <div class="m-6 w-[200px]">
                    @for ($i=5;10>$i;$i++)
                        <div class="flex items-center my-[2px] justify-start">
                            <img src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$summonerData["game"][$i]["championId"]}}.png" class="w-[30px] rounded-lg">
                            <p class="text-text_light text-ellipsis">{{$summonerData["game"][$i]["riotIdGameName"]}}#{{$summonerData["game"][$i]["riotIdTagline"]}}</p>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="w-8 {{$bgColor}} rounded-r-[10px] flex items-end"><img src="{{ asset('images/flechaAbajo.svg') }}" alt="fecha abajo" class="w-full"></div>
    </div>
@endif
