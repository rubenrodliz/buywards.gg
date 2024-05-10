<x-summoner-layout >
    @section('scripts')
        @vite(['resources/css/summoner.css'])
        @vite(['resources/js/porcentajeWinRate.js'])
    @endsection

    <main class="flex w-full flex-col">
        <x-top-navbar />
        <section class="flex flex-1 flex-col items-center p-[40px] bg-cover bg-fixed" style="background-image: linear-gradient(to right, #1c1c1f, #1c1c1f85, #1c1c1f), url('https://cdn.communitydragon.org/14.8.1/champion/kaisa/splash-art');">
            <section class="w-[90%] mt-7">
                <div class="flex justify-between items-center pb-[50px]">
                    <div class="flex justify-start gap-[30px]">
                        <div class="w-200 h-200 p-[100px] bg-primary rounded-lg py-2 px-4">
                            Summoner icon
                        </div>
                        <div class="flex flex-col gap-[50px]">
                            <h1 id="" class="text-5xl text-text_light">
                                User Name
                                <span class="text-primary">
                                    #hastag
                                </span>
                            </h1>
                            <a href="#" class="text-center font-bold text-2xl bg-primary rounded-lg py-2 px-4 w-40">
                                Update
                            </a>
                        </div>
                    </div>
                    <div class="justify-end"></div>
                </div>

                @php
                // $prueba = new \App\Models\Summoner('OkasarRP', 'LSG', 'europe');
                // $prueba->execute();
            @endphp
                <div class="flex gap-[50px] pt-[30px] pb-[30px]">
                    <div class="w-[100px]">
                        <h4 class="active font-bold text-text_light text-2xl text-left">
                            Resumen
                        </h4>
                    </div>
                    <div class="w-[200px]">
                        <h4 class=" text-text_light text-2xl text-left">
                            Juego en vivo
                        </h4>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-5">
                    <x-summoner-league rank="Diamond" tier="4" lp="40" wins="3" losses="10" winrate="55" titulo="Clasificatoria Solo/Duo" class="col-start-1 col-span-3 row-start-1" />
                    <x-summoner-league rank="Iron" tier="" lp="40" wins="3" losses="10" winrate="55" titulo="Clasificatoria Flexible" class="col-start-1 col-span-3 row-start-2"/>
                    <x-rendiment class="col-start-1 col-span-3 row-start-3"/>
                    <div class=" grid grid-cols-12 grid-rows-12 col-start-4 col-span-9 row-start-1 row-span-12" >
                        <x-porcentaje-winrate class="col-start-1 col-span-12 row-start-1"/>
                        <x-game class="col-start-1 col-span-12" win_lose="Victoria" titulo="Clasificatoria Solo/Duo" rank="Diamond" tier="4"/>
                        <x-game class="col-start-1 col-span-12" win_lose="Derrota" titulo="Clasificatoria Flexible" rank="Diamond" tier="4"/>
                    </div>
                </div>
            </section>
        </section>
    </main>
</x-summoner-layout>
<script>
    let json=`{
  "gameName": "OkasarRP",
  "tagLine": "LSG",
  "profileIconId": "4858(peticion)",
  "summonerLevel": "420",
  "rankedSolo": {
    "queueType": "RANKED_SOLO_5x5",
    "tier": "DIAMOND",
    "rank": "4",
    "leaguePoints": "69",
    "wins": "69",
    "loses": "69",
    "winRate": "50",
    "hotStreak": "true"
  },
  "rankedFlex": {
    "queueType": "RANKED_FLEX_SR",
    "tier": "GOLD",
    "rank": "IV",
    "leaguePoints": {},
    "wins": "69",
    "loses": "69",
    "winRatio": "50",
    "hotStreak": "true"
  },
  "performance": {
    "total": {
      "champ1": {
        "champLogo": "link",
        "champName": "yasuo",
        "kda": "3.69",
        "wins": "10",
        "loses": "5",
        "winrate": "69"
      },
      "champ2": {
        "champLogo": "link",
        "champName": "kai'sa",
        "kda": "3.69",
        "wins": "10",
        "loses": "5",
        "winrate": "69"
      },
      "champ3": {
        "champLogo": "link",
        "champName": "kai'sa",
        "kda": "3.69",
        "wins": "10",
        "loses": "5",
        "winrate": "69"
      }
    },
    "solo": {
      "champ1": {
        "champLogo": "link",
        "champName": "yasuo",
        "kda": "3.69",
        "wins": "10",
        "loses": "5",
        "winrate": "69"
      },
      "champ2": {
        "champLogo": "link",
        "champName": "kai'sa",
        "kda": "3.69",
        "wins": "10",
        "loses": "5",
        "winrate": "69"
      },
      "champ3": {
        "champLogo": "link",
        "champName": "kai'sa",
        "kda": "3.69",
        "wins": "10",
        "loses": "5",
        "winrate": "69"
      }
    },
    "flex": {
      "champ1": {
        "champLogo": "link",
        "champName": "yasuo",
        "kda": "3.69",
        "wins": "10",
        "loses": "5",
        "winrate": "69"
      },
      "champ2": {
        "champLogo": "link",
        "champName": "kai'sa",
        "kda": "3.69",
        "wins": "10",
        "loses": "5",
        "winrate": "69"
      },
      "champ3": {
        "champLogo": "link",
        "champName": "kai'sa",
        "kda": "3.69",
        "wins": "10",
        "loses": "5",
        "winrate": "69"
      }
    }
  },
  "games": {
    "game0": {
      "gameMode": "ARAM",
      "win": "true",
      "gameDuration_min": "20",
      "gameDuration_sec": "41",
      "ownSide": "blue",
      "ownGameInfo":{
        "champIcon": "url",
        "summoner1Id": "4",
        "summoner2Id": "6",
        "tier": "DIAMOND",
        "rank": "IV",
        "kills": "20",
        "deaths": "5",
        "asists": "12",
        "kda": "4.69",
        "killParticipation": "70",
        "runes": {
          "primaryStyle": "8008",
          "subStyle": "8429"
        },
        "totalMinionsKilled": "200",
        "miniosPerMinute": "6.9",
        "items": {
            "item0": "1026",
            "item1": "6655",
            "item2": "4645",
            "item3": "3020",
            "item4": "3089",
            "item5": "4630",
            "item6": "0"
        }
      },
      "gameInfo": {
        "team1": {
          "win": "true",
          "side": "blue",
          "teamBaronKills": "1",
          "teamElderDragonKills": "1",
          "dragonKills": "3",
          "inhibitorKills": "3",
          "teamRiftHeraldKills": "2",
          "totalGoldEarned": "20000",
          "players": {
            "player1": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
	          "player2": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player3": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player4": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player5": {
              "tier": "DIAMOND",
              "rank": "IV",
              "kills": "20",
              "champLevel": 18,
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            }
          }
        },
        "team2": {
          "win": "false",
          "side": "red",
          "teamBaronKills": "1",
          "teamElderDragonKills": "1",
          "dragonKills": "3",
          "inhibitorKills": "3",
          "teamRiftHeraldKills": "2",
          "totalGoldEarned": "20000",
          "players": {
            "player1": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
	          "player2": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player3": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player4": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player5": {
              "tier": "DIAMOND",
              "rank": "IV",
              "kills": "20",
              "champLevel": 18,
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            }
          }
        }
      }
    },
    "game1": {
      "gameMode": "ARAM",
      "win": "true",
      "gameDuration_min": "20",
      "gameDuration_sec": "41",
      "ownSide": "blue",
      "ownGameInfo":{
        "champIcon": "url",
        "summoner1Id": "4",
        "summoner2Id": "6",
        "tier": "DIAMOND",
        "rank": "IV",
        "kills": "20",
        "deaths": "5",
        "asists": "12",
        "kda": "4.69",
        "killParticipation": "70",
        "runes": {
          "primaryStyle": "8008",
          "subStyle": "8429"
        },
        "totalMinionsKilled": "200",
        "miniosPerMinute": "6.9",
        "items": {
            "item0": "1026",
            "item1": "6655",
            "item2": "4645",
            "item3": "3020",
            "item4": "3089",
            "item5": "4630",
            "item6": "0"
        }
      },
      "gameInfo": {
        "team1": {
          "win": "true",
          "side": "blue",
          "teamBaronKills": "1",
          "teamElderDragonKills": "1",
          "dragonKills": "3",
          "inhibitorKills": "3",
          "teamRiftHeraldKills": "2",
          "totalGoldEarned": "20000",
          "players": {
            "player1": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
	          "player2": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player3": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player4": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player5": {
              "tier": "DIAMOND",
              "rank": "IV",
              "kills": "20",
              "champLevel": 18,
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            }
          }
        },
        "team2": {
          "win": "false",
          "side": "red",
          "teamBaronKills": "1",
          "teamElderDragonKills": "1",
          "dragonKills": "3",
          "inhibitorKills": "3",
          "teamRiftHeraldKills": "2",
          "totalGoldEarned": "20000",
          "players": {
            "player1": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
	          "player2": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player3": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player4": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player5": {
              "tier": "DIAMOND",
              "rank": "IV",
              "kills": "20",
              "champLevel": 18,
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            }
          }
        }
      }
    },
    "game2": {
      "gameMode": "ARAM",
      "win": "true",
      "gameDuration_min": "20",
      "gameDuration_sec": "41",
      "ownSide": "blue",
      "ownGameInfo":{
        "champIcon": "url",
        "summoner1Id": "4",
        "summoner2Id": "6",
        "tier": "DIAMOND",
        "rank": "IV",
        "kills": "20",
        "deaths": "5",
        "asists": "12",
        "kda": "4.69",
        "killParticipation": "70",
        "runes": {
          "primaryStyle": "8008",
          "subStyle": "8429"
        },
        "totalMinionsKilled": "200",
        "miniosPerMinute": "6.9",
        "items": {
            "item0": "1026",
            "item1": "6655",
            "item2": "4645",
            "item3": "3020",
            "item4": "3089",
            "item5": "4630",
            "item6": "0"
        }
      },
      "gameInfo": {
        "team1": {
          "win": "true",
          "side": "blue",
          "teamBaronKills": "1",
          "teamElderDragonKills": "1",
          "dragonKills": "3",
          "inhibitorKills": "3",
          "teamRiftHeraldKills": "2",
          "totalGoldEarned": "20000",
          "players": {
            "player1": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
	          "player2": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player3": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player4": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player5": {
              "tier": "DIAMOND",
              "rank": "IV",
              "kills": "20",
              "champLevel": 18,
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            }
          }
        },
        "team2": {
          "win": "false",
          "side": "red",
          "teamBaronKills": "1",
          "teamElderDragonKills": "1",
          "dragonKills": "3",
          "inhibitorKills": "3",
          "teamRiftHeraldKills": "2",
          "totalGoldEarned": "20000",
          "players": {
            "player1": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
	          "player2": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player3": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player4": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player5": {
              "tier": "DIAMOND",
              "rank": "IV",
              "kills": "20",
              "champLevel": 18,
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            }
          }
        }
      }
    },
    "game3": {
      "gameMode": "ARAM",
      "win": "true",
      "gameDuration_min": "20",
      "gameDuration_sec": "41",
      "ownSide": "blue",
      "ownGameInfo":{
        "champIcon": "url",
        "summoner1Id": "4",
        "summoner2Id": "6",
        "tier": "DIAMOND",
        "rank": "IV",
        "kills": "20",
        "deaths": "5",
        "asists": "12",
        "kda": "4.69",
        "killParticipation": "70",
        "runes": {
          "primaryStyle": "8008",
          "subStyle": "8429"
        },
        "totalMinionsKilled": "200",
        "miniosPerMinute": "6.9",
        "items": {
            "item0": "1026",
            "item1": "6655",
            "item2": "4645",
            "item3": "3020",
            "item4": "3089",
            "item5": "4630",
            "item6": "0"
        }
      },
      "gameInfo": {
        "team1": {
          "win": "true",
          "side": "blue",
          "teamBaronKills": "1",
          "teamElderDragonKills": "1",
          "dragonKills": "3",
          "inhibitorKills": "3",
          "teamRiftHeraldKills": "2",
          "totalGoldEarned": "20000",
          "players": {
            "player1": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
	          "player2": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player3": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player4": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player5": {
              "tier": "DIAMOND",
              "rank": "IV",
              "kills": "20",
              "champLevel": 18,
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            }
          }
        },
        "team2": {
          "win": "false",
          "side": "red",
          "teamBaronKills": "1",
          "teamElderDragonKills": "1",
          "dragonKills": "3",
          "inhibitorKills": "3",
          "teamRiftHeraldKills": "2",
          "totalGoldEarned": "20000",
          "players": {
            "player1": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
	          "player2": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player3": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player4": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player5": {
              "tier": "DIAMOND",
              "rank": "IV",
              "kills": "20",
              "champLevel": 18,
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            }
          }
        }
      }
    },
    "game4": {
      "gameMode": "ARAM",
      "win": "true",
      "gameDuration_min": "20",
      "gameDuration_sec": "41",
      "ownSide": "blue",
      "ownGameInfo":{
        "champIcon": "url",
        "summoner1Id": "4",
        "summoner2Id": "6",
        "tier": "DIAMOND",
        "rank": "IV",
        "kills": "20",
        "deaths": "5",
        "asists": "12",
        "kda": "4.69",
        "killParticipation": "70",
        "runes": {
          "primaryStyle": "8008",
          "subStyle": "8429"
        },
        "totalMinionsKilled": "200",
        "miniosPerMinute": "6.9",
        "items": {
            "item0": "1026",
            "item1": "6655",
            "item2": "4645",
            "item3": "3020",
            "item4": "3089",
            "item5": "4630",
            "item6": "0"
        }
      },
      "gameInfo": {
        "team1": {
          "win": "true",
          "side": "blue",
          "teamBaronKills": "1",
          "teamElderDragonKills": "1",
          "dragonKills": "3",
          "inhibitorKills": "3",
          "teamRiftHeraldKills": "2",
          "totalGoldEarned": "20000",
          "players": {
            "player1": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
	          "player2": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player3": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player4": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player5": {
              "tier": "DIAMOND",
              "rank": "IV",
              "kills": "20",
              "champLevel": 18,
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            }
          }
        },
        "team2": {
          "win": "false",
          "side": "red",
          "teamBaronKills": "1",
          "teamElderDragonKills": "1",
          "dragonKills": "3",
          "inhibitorKills": "3",
          "teamRiftHeraldKills": "2",
          "totalGoldEarned": "20000",
          "players": {
            "player1": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
	          "player2": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player3": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player4": {
              "tier": "DIAMOND",
              "rank": "IV",
              "champLevel": 18,
              "kills": "20",
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            },
            "player5": {
              "tier": "DIAMOND",
              "rank": "IV",
              "kills": "20",
              "champLevel": 18,
              "deaths": "5",
              "asists": "12",
              "kda": "4.69",
              "killParticipation": "70",
              "totalDamageDealtToChampions": "69420",
              "champIcon": "url",
              "summoner1Id": "4",
              "summoner2Id": "6",
              "runes": {
                "primaryStyle": "8008",
                "subStyle": "8429"
              },
              "totalMinionsKilled": "200",
              "miniosPerMinute": "6.9",
              "items": {
                "item0": "1026",
                "item1": "6655",
                "item2": "4645",
                "item3": "3020",
                "item4": "3089",
                "item5": "0",
                "item6": "0"
              }
            }
          }
        }
      }
    }
  }
}`;
let data = JSON.parse(json);
console.log(data.tagLine);

</script>



