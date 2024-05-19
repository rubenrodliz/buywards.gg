@props(["summonerData"])
@vite(['/resources/css/summoner.css'])
@dd($summonerData)
@php
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
{{-- @dd($data->ownGameInfo->runes) --}}

<div {{ $attributes->merge(['class'=>"bg-opacity-60 bg-bg_dark border-$color border-2 rounded-xl flex justify-between text-$color"]) }}>
    <div class="w-8 {{$bgColor}} rounded-l-[10px]"></div>
    <div class="w-[90%] flex flex-wrap justify-around">
        <div class="flex flex-wrap justify-center">
            <div class="self-center text-text_light text-[16px] font-medium">
                <h2 class="text-[20px] font-bold">{{$data->gameMode}}</h2>
                <p>Hace 7 días</p>
                <hr class="text-{{$color}} my-[10px]">
                <p><span class="text-{{$color}}">{{$win}}</span> {{$data->gameDuration}}</p>
                <p>{{$data->ownGameInfo->tier}} {{$data->ownGameInfo->rank}}</p>
            </div>
            <div class="self-center text-text_light text-[16px] font-medium flex flex-wrap items-center justify-center">
                <div class="w-[70px] h-[50%]">
                    <img src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$data->ownGameInfo->champIcon}}.png" alt="" class="rounded-lg">
                </div>
                <div class="ml-[5%] h-fit flex">
                    <div class="flex">
                        <div>
                            @foreach ($data->ownGameInfo->runes as $rune)
                                <img src="https://lolcdn.darkintaqt.com/cdn/spells/{{$rune}}" alt="rune" class="w-[35px] rounded-lg">
                            @endforeach
                        </div>
                    </div>
                    <div class="ml-[15px]">
                        <h2 class="text-[20px]">{{$data->ownGameInfo->kills}} / <span class="text-kda_red">{{$data->ownGameInfo->deaths}}</span> / {{$data->ownGameInfo->asists}}</h2>
                        <p class="text-[16px] text-{{$color}}">{{$data->ownGameInfo->kda}} KDA</p>
                        <p class="text-[16px]">{{$data->ownGameInfo->totalMinionsKilled}} CS ({{$data->ownGameInfo->miniosPerMinute}})</p>
                    </div>
                </div>
                <div class="flex flex-wrap h-[35%] mt-2 items-center justify-start">
                    @foreach ($data->ownGameInfo->items as $item)
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
            <div class="m-2">
                @for ($i=1;6>$i;$i++)
                    <div class="flex items-center w-[50%] my-[2px]">
                        @php
                            $player="player".$i;
                        @endphp
                        <img src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$data->gameInfo->team1->players->$player->champIcon}}.png" class="w-[30px] rounded-lg">
                        <p class="text-text_light">{{$data->gameInfo->team1->players->$player->riotIdGameName}}#{{$data->gameInfo->team1->players->$player->riotIdTagline}}</p>
                    </div>
                @endfor
            </div>
            <div class="m-2">
                @for ($i=1;6>$i;$i++)
                    <div class="flex items-center w-[50%] my-[2px]">
                        @php
                            $player="player".$i;
                        @endphp
                        <img src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$data->gameInfo->team2->players->$player->champIcon}}.png" class="w-[30px] rounded-lg">
                        <p class="text-text_light">{{$data->gameInfo->team2->players->$player->riotIdGameName}}#{{$data->gameInfo->team2->players->$player->riotIdTagline}}</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="w-8 {{$bgColor}} rounded-r-[10px] flex items-end"><img src="{{ asset('images/flechaAbajo.svg') }}" alt="fecha abajo" class="w-full"></div>
</div>
