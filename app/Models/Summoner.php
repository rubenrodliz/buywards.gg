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

        // $PUUID = getPUUID($this->name,$this->tag,$this->region);

        $PUUID = RiotService::getAccountByPuuid($this->name, $this->tag,$this->region);
        $PUUID_puuid = $PUUID['puuid'];
        $PUUID_name = $PUUID['gameName'];
        $PUUID_tag = $PUUID['tagLine'];

        $SUMMONER_DATA = RiotService::getSummonerDataByPuuid($PUUID_puuid,$this->region);
        $SUMMONER_DATA_id = $SUMMONER_DATA['id'];
        $SUMMONER_DATA_accountId = $SUMMONER_DATA['accountId'];
        $SUMMONER_DATA_profileIconId = $SUMMONER_DATA['profileIconId'];
        $SUMMONER_DATA_revisionDate = $SUMMONER_DATA['revisionDate'];
        $SUMMONER_DATA_summonerLevel = $SUMMONER_DATA['summonerLevel'];

        $LEAGUE_ENTRIES = RiotService::getLeagueEntriesBySummonerId($SUMMONER_DATA_id,$this->region);
        dd($LEAGUE_ENTRIES);



        // return $array;

    }

    //servcices//////////////////////////
    
}
