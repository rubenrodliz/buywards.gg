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
    "profileIconId": "kaisa",
    "summonerLevel": "420",
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
          "champName": "yasuo",
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
          "champIcon": "url",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
          "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
          "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
          "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
          "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
                "rank": "4",
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
  }');
    $data_rankSolo=json_encode($data->rankedSolo);
    $data_rankFlex=json_encode($data->rankedFlex);
    $data_performance_total=json_encode($data->performance->total);
    $data_performance_solo=json_encode($data->performance->solo);
    $data_performance_flex=json_encode($data->performance->flex);
    // $Solo=json_encode($data->performance->Solo);
    // $data_performance_total=json_encode($data->performance->total);
    @endphp
    {{-- @dd($data); --}}
    <main class="flex w-full flex-col">
        <x-top-navbar />
        <section class="flex flex-1 flex-col items-center p-[40px] bg-cover bg-fixed" style="background-image: linear-gradient(to right, #1c1c1f, #1c1c1f85, #1c1c1f), url('https://cdn.communitydragon.org/14.8.1/champion/kaisa/splash-art');">
            <section class="w-[90%] mt-7">
                <div class="flex justify-between items-center pb-[50px]">
                    <div class="flex justify-start gap-[30px]">
                        <div class="w-[150px] h-[150px] p-[100px] bg-primary rounded-lg py-2 px-4" id="img">
                            <img src="https://cdn.communitydragon.org/14.5.1/champion/kaisa/splash-art" class="w-full h-full">
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
                <div id="data_summoner" class="grid grid-cols-12 gap-5">
                    <x-summoner-league data="{{$data_rankSolo}}" class="col-start-1 col-span-3 row-start-1" />
                    <x-summoner-league data="{{$data_rankFlex}}" class="col-start-1 col-span-3 row-start-2"/>
                    <x-rendiment class="col-start-1 col-span-3 row-start-3" data="{{$data_performance_total}}"/>
                    <div class=" grid grid-cols-12 grid-rows-12 col-start-4 col-span-9 row-start-1 row-span-12" >
                        <x-porcentaje-winrate data="{{$data_performance_total}}" class="col-start-1 col-span-12 row-start-1"/>
                        <x-game class="col-start-1 col-span-12" win_lose="Victoria" titulo="Clasificatoria Solo/Duo" rank="Diamond" tier="4"/>
                        <x-game class="col-start-1 col-span-12" win_lose="Derrota" titulo="Clasificatoria Flexible" rank="Diamond" tier="4"/>
                    </div>
                </div>
            </section>
        </section>
    </main>
</x-summoner-layout>


