<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\RiotService;


class Summoner extends Model
{
    use HasFactory;
    protected string $name;
    protected string $tag;
    protected string $region;
    public RiotService $riotService ;

    public function __construct(string $name, string $tag, string $region)
    {
        $this->name = $name;
        $this->tag = $tag;
        $this->region = $region;


    }

    public function execute(){
        $RETURN_DATA = "{";
        // CURRENT PATCH INFO /////////////////////////////
        $CURRENT_PATCH = RiotService::getLatestGameVersion();//última versión del juego


        // PUUID INFO /////////////////////////////
        $PUUID = RiotService::getAccountByPuuid($this->name, $this->tag,$this->region);//nombre de invocador
        $PUUID_puuid = $PUUID['puuid'];
        $PUUID_name = $PUUID['gameName'];
        $PUUID_tag = $PUUID['tagLine'];

        // SUMMONER DATA INFO /////////////////////////////
        $SUMMONER_DATA = RiotService::getSummonerDataByPuuid($PUUID_puuid,$this->region);// información del invocador
        $SUMMONER_DATA_id = $SUMMONER_DATA['id'];
        $SUMMONER_DATA_accountId = $SUMMONER_DATA['accountId'];
        $SUMMONER_DATA_profileIconId = $SUMMONER_DATA['profileIconId'];
        $SUMMONER_DATA_revisionDate = $SUMMONER_DATA['revisionDate'];
        $SUMMONER_DATA_summonerLevel = $SUMMONER_DATA['summonerLevel'];

        // LEAGUE ENTRIES INFO /////////////////////////////

        $LEAGUE_ENTRIES = RiotService::getLeagueEntriesBySummonerId($SUMMONER_DATA_id,$this->region);// información de las ligas

            //flex info////////////////////////////
            // $LEAGUE_DATA_queueType_flex = $LEAGUE_ENTRIES[0]['queueType'];
            // $LEAGUE_DATA_tier_flex =$LEAGUE_ENTRIES[0]['tier'];
            // $LEAGUE_DATA_rank_flex =  $this->transformRank($LEAGUE_ENTRIES[0]['rank']);
            // $LEAGUE_DATA_leaguePoints_flex = $LEAGUE_ENTRIES[0]['leaguePoints'];
            // $LEAGUE_DATA_wins_flex = $LEAGUE_ENTRIES[0]['wins'];
            // $LEAGUE_DATA_losses_flex = $LEAGUE_ENTRIES[0]['losses'];
            // $LEAGUE_DATA_winrate_flex = $this->getWinrate($LEAGUE_DATA_wins_flex,$LEAGUE_DATA_losses_flex);

            // //solo/duo info////////////////////////////
            // $LEAGUE_DATA_queueType_solo = $LEAGUE_ENTRIES[1]['queueType'];
            // $LEAGUE_DATA_tier_solo = $LEAGUE_ENTRIES[1]['tier'];
            // $LEAGUE_DATA_rank_solo =  $this->transformRank($LEAGUE_ENTRIES[1]['rank']);
            // $LEAGUE_DATA_leaguePoints_solo = $LEAGUE_ENTRIES[1]['leaguePoints'];
            // $LEAGUE_DATA_wins_solo = $LEAGUE_ENTRIES[1]['wins'];
            // $LEAGUE_DATA_losses_solo = $LEAGUE_ENTRIES[1]['losses'];
            // $LEAGUE_DATA_winrate_solo = $this->getWinrate($LEAGUE_DATA_wins_solo,$LEAGUE_DATA_losses_solo);


        // RETURN DATA FASE 1//////////////////////////////

        // $RETURN_DATA .= '"gameName": "'.$PUUID_name.'","tagLine": "'.$PUUID_tag.'","profileIconId": "'.$SUMMONER_DATA_profileIconId.'","summonerLevel": "'.$SUMMONER_DATA_summonerLevel.'",';


        // $RETURN_DATA .= '"rankedSolo": {"queueType": "'.$LEAGUE_DATA_queueType_solo.'","tier": "'.$LEAGUE_DATA_tier_solo.'","rank": "'.$LEAGUE_DATA_rank_solo.'","leaguePoints": "'.$LEAGUE_DATA_leaguePoints_solo.'","wins": "'.$LEAGUE_DATA_wins_solo.'","loses": "'.$LEAGUE_DATA_losses_solo.'","winRate": "'.$LEAGUE_DATA_winrate_solo.'"},';

        // $RETURN_DATA .= '"rankedFlex": {"queueType": "'.$LEAGUE_DATA_queueType_flex.'","tier": "'.$LEAGUE_DATA_tier_flex.'","rank": "'.$LEAGUE_DATA_rank_flex.'","leaguePoints": "'.$LEAGUE_DATA_leaguePoints_flex.'","wins": "'.$LEAGUE_DATA_wins_flex.'","loses": "'.$LEAGUE_DATA_losses_flex.'","winRate": "'.$LEAGUE_DATA_winrate_flex.'"},';
        // dd($RETURN_DATA);

        // MATCH ENTRIES INFO////////////////////////////
        $RETURN_DATA .='{ "games" : {';

        $MACH_ENTRIES =RiotService::getMatchHistoryByPuuid($PUUID_puuid,$this->region);//array de id de partidas

        for($i = 0 ; $i < count($MACH_ENTRIES); $i++){
            $MACH_INSTANCE = RiotService::getMatchDataByMatchId($MACH_ENTRIES[$i],$this->region);
            $pruebaArray = $this->getParticipantsData($MACH_INSTANCE['info']['participants'],$MACH_INSTANCE['info']['gameDuration']);
            dd($pruebaArray);
            dd($MACH_INSTANCE);
            $MACH_INSTANCE_gameMode = $MACH_INSTANCE['info']['gameMode'];
            $MACH_INSTANCE_win = $this->findGameResult($MACH_INSTANCE);
            $MACH_INSTANCE_gameDuration = $this->durationMinSec($MACH_INSTANCE);
            $MACH_INSTANCE_ownSide = $this->getOwnSide($MACH_INSTANCE);

            // $MACH_INSTANCE_gameDurationMin = $MACH_INSTANCE[''];
            // $MACH_INSTANCE_gameDurationSec = $MACH_INSTANCE[''];
            // $MACH_INSTANCE_ownSide = $MACH_INSTANCE[''];
            $this->getTeamData($MACH_INSTANCE['info']['teams']);


            $GAME .= '{ "game'.$i.'" : { "gameMode": "'.$MACH_INSTANCE_gameMode.'","win": "'.$MACH_INSTANCE_win.'","gameDuration": "'.$MACH_INSTANCE_gameDuriation.'","ownSide": "'.$MACH_INSTANCE_ownSide.'",' ;

            $GAME .= '"ownGameInfo":{
                "champIcon": "'.$this->getOwnInfo($MACH_INSTANCE).'",
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
              }';


        }






        // return $array;

    }

    //servcices//////////////////////////

    protected function getWinrate($wins,$losses){
        $total_games=$wins+$losses;
        $winrate=($wins*100)/$total_games;
        return $winrate;
    }
    protected function transformRank($tier){
        switch($tier){
            case "I":return 1;
            case "II":return 2;
            case "III":return 3;
            case "IV":return 4;
            default: return 'undefined';
        }
    }
    protected function getParticipantsData($participants,$gameDuration){
        $arrayResponse = [];
        $ownArray=[];
        for($i = 0 ;  $i<count($participants); $i++){

            // $league=$this->getTierRankForOthers($participants[$i]['riotIdGameName'],$participants[$i]['riotIdTagline'],$this->region);

            $arrayParticipantsData=[
                "riotIdGameName"=>$participants[$i]['riotIdGameName'],
                "riotIdTagline"=>$participants[$i]['riotIdTagline'],
                "championId"=>$participants[$i]['championId'],
                "summoner1Id"=>$participants[$i]['summoner1Id'],
                "summoner2Id"=>$participants[$i]['summoner2Id'],
                // "tier"=>$league['tier'],
                // "rank"=>$league['rank'],
                "kills"=>$participants[$i]['kills'],
                "deaths"=>$participants[$i]['deaths'],
                "assists"=>$participants[$i]['assists'],
                "kda"=>round($participants[$i]['challenges']['kda'],2),
                "killParticipation"=>$this->getkillParticipation($participants[$i]['challenges']['killParticipation']),
                "runes"=>[
                    "primaryStyle" =>$participants[$i]['perks']['styles'][0]['style'],
                    "subStyle" =>$participants[$i]['perks']['styles'][1]['style']
                ],
                "totalMinionsKilled" => $participants[$i]['totalMinionsKilled'],
                "minionsPerMinute" => $this->getMininosPerMinute($participants[$i]['totalMinionsKilled'],$gameDuration),//otro metodo
                "items" => [
                    "item0"=>$participants[$i]['item0'],
                    "item1"=>$participants[$i]['item1'],
                    "item2"=>$participants[$i]['item2'],
                    "item3"=>$participants[$i]['item3'],
                    "item4"=>$participants[$i]['item4'],
                    "item5"=>$participants[$i]['item5'],
                    "item6"=>$participants[$i]['item6'],
                ],
            ];

            // $arrayResponse[] = '"player"'.$i.'=> ['.$arrayParticipantsData.']';
            $arrayResponse[] = $arrayParticipantsData;
        }
        for($y = 0 ; $y <count($arrayResponse); $y++){

            if(strtolower($arrayResponse[$y]["riotIdGameName"]) == strtolower($this->name)){
                $ownArray = $arrayResponse[$y];

            }
        }
        $arrayResponse[] = ["ownData"=>$ownArray];

        return $arrayResponse;
    }
    protected static function getTeamData($arrayTeams){//$MACH_INSTANCE['info']['teams']
        $teamsInfo=[];
        $team0;
        $team1;
        $side="";
        for($i = 0 ; $i <count($arrayTeams); $i++){
            if($i == 0){$side = 'blue';}else{$side = 'red';}
            $team = 'team'.$i;
            $team=['win'=> $arrayTeams[$i]['win'],'side' => $side];
            $teamsInfo[] = $team;

        }
        return $teamsInfo;
    }







    protected function getkillParticipation($killP){
        return round($killP*100,2);
    }

    protected function getTierRankForOthers($name,$tag,$region){
        $puuid=RiotService::getAccountByPuuid($name,$tag,$region)['puuid'];
        $idInfo=RiotService::getSummonerDataByPuuid($puuid,$region)['id'];
        $tierRank = RiotService::getLeagueEntriesBySummonerId($idInfo,$region);

        for($u = 0 ; $u < count($tierRank); $u++){
            if($tierRank[$u]['queueType']=='RANKED_SOLO_5x5'){
                return ["rank" => $tierRank[$u]['rank'],"tier" => $tierRank[$u]['tier']];
            }
        }
        return ["rank" => "","tier" => "UNRANKED"];

    }
    protected function getMininosPerMinute($totalMinions,$gameDuration){
        return round($totalMinions/($gameDuration/60),2);
    }



    protected function findGameResult($machInstance){
        $arrayParticipants=$machInstance['info']['participants'];
        $win = false;
        for($i = 0 ; $i <count($arrayParticipants); $i++){
            if($arrayParticipants[$i]['riotIdGameName'] == $this->name){
                if($arrayParticipants[$i]['win']==true){
                    $win = true;
                }
            }
        }
        return $win;

    }
    protected function durationMinSec($machInstance){
        $gameDurationTotalMin = $machInstance['info']['gameDuration'];
        if($gameDurationTotalMin < 3600){
            $gameTime = date("i:s", $gameDurationTotalMin);
            return  $gameTime;
        }else{
            $gameTime = date("h:i:s", $gameDurationTotalMin);
            return $gameTime;
        }
        return  null;

    }

    protected function getOwnSide($machInstance){
        $arrayParticipants=$machInstance['info']['participants'];
        $arrayTeams=$machInstance['info']['teams'];
        $win;
        $team;
        for($i = 0 ; $i <count($arrayParticipants); $i++){
            if($arrayParticipants[$i]['riotIdGameName'] == $this->name){
                $win = $arrayParticipants[$i]['win'];
            }
        }
        for($i = 0 ; $i <count($arrayTeams); $i++){
            if($arrayTeams[$i]['win'] == $win){
                if($i == 0){
                   return $team = 'blue';
                }else if($i == 1){
                    return $team = "red";
                }else{
                    return null;
                }

            }
        }

    }

    protected function getOwnInfo($machInstance){
        $arrayParticipants=$machInstance['info']['participants'];
        for($i = 0; $i<count($arrayParticipants);$i++){
            if($arrayParticipants[$i]['riotIdGameName'] == $this->name){
                return $arrayParticipants[$i];
            }
        }
    }
}
