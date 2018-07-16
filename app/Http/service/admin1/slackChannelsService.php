<?php

namespace App\Http\service\admin1;

use App\Http\Models\admin1\slackChannels;

class slackChannelsService 
{

    public function create($data)
    {
        return slackChannels::create($data);
    }

    public function update($data,$id)
    {
        $slackChannels = slackChannels::findOrFail($id);
        $slackChannels->update($data);
        return $slackChannels;
    }
    public function delete($id)
    {
        $slackChannels = slackChannels::findOrFail($id);
        $slackChannels->delete();
        return $slackChannels;
    }

}
