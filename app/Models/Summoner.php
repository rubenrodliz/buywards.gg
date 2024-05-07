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

        $PUUID = RiotService::getAccountByPuuid($this->name, $this->tag);
        $PUUID_puuid = $PUUID['puuid'];
        $PUUID_name = $PUUID['gameName'];
        $PUUID_tag = $PUUID['tagLine'];

        $SUMMONER_DATA = RiotService::getSummonerDataByPuuid($PUUID_puuid,'euw1');
        dd($SUMMONER_DATA);


        // return $array;

    }

    protected function getPUUID($name,$tag,$region):string{
        $url = 'https://'. $region .'.api.riotgames.com/riot/account/v1/accounts/by-riot-id/'.$name.'/'.$tag.'?api_key='.$API_KEY;

        $PUUID = $url['puuid'];
        return $PUUID;
    }
}
