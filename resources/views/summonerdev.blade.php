<x-summoner-layout >
    @section('scripts')
        @vite(['resources/css/summoner.css'])
        @vite(['resources/js/porcentajeWinRate.js'])
        @vite(['resources/js/dataSummoner.js'])
    @endsection
    @php
        $data = json_decode('{
    "gameName": "OkasarRP",
    "tagLine": "LSG",
    "summonerLevel": "420",
    "profileIconId": "4851",
    "patch": "14.5.1",
    "rankedSolo": {
      "queueType": "RANKED_SOLO_5x5",
      "tier": "DIAMOND",
      "rank": "4",
      "leaguePoints": "69",
      "wins": "69",
      "loses": "69",
      "winRate": "50"
    },
    "rankedFlex": {
      "queueType": "RANKED_FLEX_SR",
      "tier": "GOLD",
      "rank": "4",
      "leaguePoints": "69",
      "wins": "69",
      "loses": "69",
      "winRate": "50"
    },
    "performance": {
      "total": {
        "champ1": {
          "champLogo": "1",
          "champName": "ekko",
          "kda": "3.69",
          "wins": "10",
          "loses": "5",
          "winrate": "69"
        },
        "champ2": {
          "champLogo": "2",
          "champName": "kaisa",
          "kda": "3.69",
          "wins": "10",
          "loses": "5",
          "winrate": "69"
        },
        "champ3": {
          "champLogo": "3",
          "champName": "kaisa",
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
          "champName": "kaisa",
          "kda": "3.69",
          "wins": "10",
          "loses": "5",
          "winrate": "69"
        },
        "champ3": {
          "champLogo": "link",
          "champName": "kaisa",
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
          "champName": "kaisa",
          "kda": "3.69",
          "wins": "10",
          "loses": "5",
          "winrate": "69"
        },
        "champ3": {
          "champLogo": "link",
          "champName": "kaisa",
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
        "gameDuration": "20:30",
        "ownSide": "blue",
        "ownGameInfo":{
          "champIcon": "1",
          "summoner1Id": "4",
          "summoner2Id": "6",
          "tier": "DIAMOND",
          "rank": "4",
          "kills": "20",
          "deaths": "5",
          "asists": "12",
          "kda": "4.69",
          "killParticipation": "70",
          "runes": {
            "primaryStyle": "1",
            "subStyle": "3"
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
                "riotIdGameName": "summoner1",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "1",
                "summoner1Id": "4",
                "summoner2Id": "6",
                "runes": {
                  "primaryStyle": "1",
                  "subStyle": "3"
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
                "riotIdGameName": "summoner2",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "2",
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
                "riotIdGameName": "summoner3",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "3",
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
                "riotIdGameName": "summoner4",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "4",
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
                "riotIdGameName": "summoner5",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "kills": "20",
                "champLevel": 18,
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "5",
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
                "riotIdGameName": "summoner6",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "6",
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
                "riotIdGameName": "summoner7",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "7",
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
                "riotIdGameName": "summoner8",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "8",
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
                "riotIdGameName": "summoner9",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "9",
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
                "riotIdGameName": "summoner10",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "kills": "20",
                "champLevel": 18,
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "10",
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
        "win": "false",
        "gameDuration": "20:30",
        "ownSide": "blue",
        "ownGameInfo":{
          "champIcon": "1",
          "summoner1Id": "4",
          "summoner2Id": "6",
          "tier": "DIAMOND",
          "rank": "4",
          "kills": "20",
          "deaths": "5",
          "asists": "12",
          "kda": "4.69",
          "killParticipation": "70",
          "runes": {
            "primaryStyle": "1",
            "subStyle": "3"
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
            "win": "false",
            "side": "blue",
            "teamBaronKills": "1",
            "teamElderDragonKills": "1",
            "dragonKills": "3",
            "inhibitorKills": "3",
            "teamRiftHeraldKills": "2",
            "totalGoldEarned": "20000",
            "players": {
              "player1": {
                "riotIdGameName": "summoner1",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "1",
                "summoner1Id": "4",
                "summoner2Id": "6",
                "runes": {
                  "primaryStyle": "1",
                  "subStyle": "3"
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
                "riotIdGameName": "summoner2",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "2",
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
                "riotIdGameName": "summoner3",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "3",
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
                "riotIdGameName": "summoner4",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "4",
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
                "riotIdGameName": "summoner5",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "kills": "20",
                "champLevel": 18,
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "5",
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
            "win": "true",
            "side": "red",
            "teamBaronKills": "1",
            "teamElderDragonKills": "1",
            "dragonKills": "3",
            "inhibitorKills": "3",
            "teamRiftHeraldKills": "2",
            "totalGoldEarned": "20000",
            "players": {
              "player1": {
                "riotIdGameName": "summoner6",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "6",
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
                "riotIdGameName": "summoner7",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "7",
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
                "riotIdGameName": "summoner8",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "8",
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
                "riotIdGameName": "summoner9",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "9",
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
                "riotIdGameName": "summoner10",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "kills": "20",
                "champLevel": 18,
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "10",
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
        "win": "false",
        "gameDuration": "20:30",
        "ownSide": "blue",
        "ownGameInfo":{
          "champIcon": "1",
          "summoner1Id": "4",
          "summoner2Id": "6",
          "tier": "DIAMOND",
          "rank": "4",
          "kills": "20",
          "deaths": "5",
          "asists": "12",
          "kda": "4.69",
          "killParticipation": "70",
          "runes": {
            "primaryStyle": "1",
            "subStyle": "3"
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
            "win": "false",
            "side": "blue",
            "teamBaronKills": "1",
            "teamElderDragonKills": "1",
            "dragonKills": "3",
            "inhibitorKills": "3",
            "teamRiftHeraldKills": "2",
            "totalGoldEarned": "20000",
            "players": {
              "player1": {
                "riotIdGameName": "summoner1",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "1",
                "summoner1Id": "4",
                "summoner2Id": "6",
                "runes": {
                  "primaryStyle": "1",
                  "subStyle": "3"
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
                "riotIdGameName": "summoner2",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "2",
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
                "riotIdGameName": "summoner3",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "3",
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
                "riotIdGameName": "summoner4",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "4",
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
                "riotIdGameName": "summoner5",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "kills": "20",
                "champLevel": 18,
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "5",
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
            "win": "true",
            "side": "red",
            "teamBaronKills": "1",
            "teamElderDragonKills": "1",
            "dragonKills": "3",
            "inhibitorKills": "3",
            "teamRiftHeraldKills": "2",
            "totalGoldEarned": "20000",
            "players": {
              "player1": {
                "riotIdGameName": "summoner6",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "6",
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
                "riotIdGameName": "summoner7",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "7",
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
                "riotIdGameName": "summoner8",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "8",
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
                "riotIdGameName": "summoner9",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "9",
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
                "riotIdGameName": "summoner10",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "kills": "20",
                "champLevel": 18,
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "10",
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
        "win": "false",
        "gameDuration": "20:30",
        "ownSide": "blue",
        "ownGameInfo":{
          "champIcon": "1",
          "summoner1Id": "4",
          "summoner2Id": "6",
          "tier": "DIAMOND",
          "rank": "4",
          "kills": "20",
          "deaths": "5",
          "asists": "12",
          "kda": "4.69",
          "killParticipation": "70",
          "runes": {
            "primaryStyle": "1",
            "subStyle": "3"
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
            "win": "false",
            "side": "blue",
            "teamBaronKills": "1",
            "teamElderDragonKills": "1",
            "dragonKills": "3",
            "inhibitorKills": "3",
            "teamRiftHeraldKills": "2",
            "totalGoldEarned": "20000",
            "players": {
              "player1": {
                "riotIdGameName": "summoner1",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "1",
                "summoner1Id": "4",
                "summoner2Id": "6",
                "runes": {
                  "primaryStyle": "1",
                  "subStyle": "3"
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
                "riotIdGameName": "summoner2",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "2",
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
                "riotIdGameName": "summoner3",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "3",
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
                "riotIdGameName": "summoner4",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "4",
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
                "riotIdGameName": "summoner5",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "kills": "20",
                "champLevel": 18,
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "5",
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
            "win": "true",
            "side": "red",
            "teamBaronKills": "1",
            "teamElderDragonKills": "1",
            "dragonKills": "3",
            "inhibitorKills": "3",
            "teamRiftHeraldKills": "2",
            "totalGoldEarned": "20000",
            "players": {
              "player1": {
                "riotIdGameName": "summoner6",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "6",
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
                "riotIdGameName": "summoner7",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "7",
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
                "riotIdGameName": "summoner8",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "8",
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
                "riotIdGameName": "summoner9",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "9",
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
                "riotIdGameName": "summoner10",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "kills": "20",
                "champLevel": 18,
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "10",
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
        "win": "false",
        "gameDuration": "20:30",
        "ownSide": "blue",
        "ownGameInfo":{
          "champIcon": "1",
          "summoner1Id": "4",
          "summoner2Id": "6",
          "tier": "DIAMOND",
          "rank": "4",
          "kills": "20",
          "deaths": "5",
          "asists": "12",
          "kda": "4.69",
          "killParticipation": "70",
          "runes": {
            "primaryStyle": "1",
            "subStyle": "3"
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
            "win": "false",
            "side": "blue",
            "teamBaronKills": "1",
            "teamElderDragonKills": "1",
            "dragonKills": "3",
            "inhibitorKills": "3",
            "teamRiftHeraldKills": "2",
            "totalGoldEarned": "20000",
            "players": {
              "player1": {
                "riotIdGameName": "summoner1",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "1",
                "summoner1Id": "4",
                "summoner2Id": "6",
                "runes": {
                  "primaryStyle": "1",
                  "subStyle": "3"
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
                "riotIdGameName": "summoner2",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "2",
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
                "riotIdGameName": "summoner3",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "3",
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
                "riotIdGameName": "summoner4",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "4",
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
                "riotIdGameName": "summoner5",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "kills": "20",
                "champLevel": 18,
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "5",
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
            "win": "true",
            "side": "red",
            "teamBaronKills": "1",
            "teamElderDragonKills": "1",
            "dragonKills": "3",
            "inhibitorKills": "3",
            "teamRiftHeraldKills": "2",
            "totalGoldEarned": "20000",
            "players": {
              "player1": {
                "riotIdGameName": "summoner6",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "6",
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
                "riotIdGameName": "summoner7",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "7",
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
                "riotIdGameName": "summoner8",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "8",
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
                "riotIdGameName": "summoner9",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "champLevel": 18,
                "kills": "20",
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "9",
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
                "riotIdGameName": "summoner10",
                "riotIdTagline": "TAG",
                "tier": "DIAMOND",
                "rank": "4",
                "kills": "20",
                "champLevel": 18,
                "deaths": "5",
                "asists": "12",
                "kda": "4.69",
                "killParticipation": "70",
                "totalDamageDealtToChampions": "69420",
                "champIcon": "10",
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
  }');
    $data_rankSolo=json_encode($data->rankedSolo);
    $data_rankFlex=json_encode($data->rankedFlex);
    $data_performance_total=json_encode($data->performance->total);
    $data_performance_solo=json_encode($data->performance->solo);
    $data_performance_flex=json_encode($data->performance->flex);
    // $data_games=json_encode($data->games->game0);
    @endphp
    {{-- @dd($data); --}}
    <main class="flex w-full flex-col">
        <x-top-navbar />
        <section class="flex flex-1 flex-col items-center p-[40px] bg-cover bg-fixed" style="background-image: linear-gradient(to right, #1c1c1f, #1c1c1f85, #1c1c1f), url('https://cdn.communitydragon.org/14.8.1/champion/{{$data->performance->total->champ1->champName}}/splash-art');">
            <section class="w-[90%] mt-7">
                <div class="flex justify-between items-center pb-[50px]">
                    <div class="flex justify-start gap-[30px]">
                        <div class="w-[150px] h-[150px] p-[100px] bg-primary rounded-lg py-2 px-4" id="img">
                            <img src="https://ddragon.leagueoflegends.com/cdn/14.9.1/img/profileicon/{{$data->profileIconId}}.png" class="w-full h-full">
                        </div>
                        <div class="flex flex-col gap-[50px]">
                            <h1 id="user_name" class="text-5xl text-text_light">
                                {{$data->gameName}}<span id='hastag' class='text-primary'>#{{$data->tagLine}}</span>
                            </h1>
                            <a href="#" class="text-center font-bold text-2xl bg-primary rounded-lg py-2 px-4 w-40">
                                Update
                            </a>
                        </div>
                    </div>
                    <div class="justify-end"></div>
                </div>

                @php
                // $prueba = new \App\Models\Summoner('OkasarRP', 'LSG', 'EUW1');
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
                <div id="data_summoner" class="grid grid-cols-12 gap-5">
                    <x-summoner-league data="{{$data_rankSolo}}" class="col-start-1 col-span-3 row-start-1" />
                    <x-summoner-league data="{{$data_rankFlex}}" class="col-start-1 col-span-3 row-start-2"/>
                    <x-rendiment class="col-start-1 col-span-3 row-start-3" data="{{$data_performance_total}}"/>
                    <div class=" grid grid-cols-12 grid-rows-6 col-start-4 col-span-9 row-start-1 row-span-12" >
                        <x-porcentaje-winrate data="{{$data_performance_total}}" class="col-start-1 col-span-12 row-start-1"/>
                        @for ($i=0;$i<5;$i++)
                            @php
                                $game="game".$i;
                            @endphp
                            <x-game data="{{json_encode($data->games->$game)}}" class="col-start-1 col-span-12" win_lose="Victoria" titulo="Clasificatoria Solo/Duo" rank="Diamond" tier="4"/>
                        @endfor
                        {{-- <x-game class="col-start-1 col-span-12" win_lose="Derrota" titulo="Clasificatoria Flexible" rank="Diamond" tier="4"/> --}}
                    </div>
                </div>
            </section>
        </section>
    </main>
</x-summoner-layout>


