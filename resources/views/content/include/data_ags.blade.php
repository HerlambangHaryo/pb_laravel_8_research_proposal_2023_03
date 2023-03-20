

@forelse ($data as $row) 
        <div class="row mb-4">
            <div class="col-4"> 
                <div class="card mb-3 flex-1 ">
                    <!-- BEGIN card-body -->
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center"> 
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <h5 class="mb-1">
                                            <img src="{{ $row->teams_home_logo }}" width="20px">

                                                {{ substr($row->teams_home, 0, 13) }} 
                                        </h5>
                                    </div>
                                    <div class="col-6 text-start">
                                        <h5 class="mb-1"> 
                                            {{ substr($row->teams_away, 0, 13) }} 
                                            <img src="{{ $row->teams_away_logo }}" width="20px">
                                        </h5>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-6 text-end">
                                        {{ $row->rank_home}}/ 
                                        <br/>
                                        {{ $row->teams_home_id}} 
                                    </div>
                                    <div class="col-6 text-start">
                                        {{ $row->rank_away}}/ 
                                        <br/>
                                        {{ $row->teams_away_id}}
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-6 text-end">
                                        {{ $row->goals_home}} 
                                    </div>
                                    <div class="col-6 text-start">
                                        {{ $row->goals_away}}
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <small>
                                        {{ $row->score_halftime_home }} 
                                        <br/> 
                                        {{ $row->goals_home - $row->score_halftime_home }}  
                                        </small>
                                    </div>
                                    <div class="col-6 text-start">
                                        <small>
                                        {{ $row->score_halftime_away }}
                                        <br/> 
                                        {{ $row->goals_away - $row->score_halftime_away }}  
                                        </small>
                                    </div> 
                                </div>
                                <div class="mb-1"> 
                                    {{ $row->tanggal }}  
                                    @if(is_null($row->star))
                                        <a  href="{{ route('Notstarted.stared', $row->id) }}" 
                                            class="badge bg-gray-700 bg-opacity-50" >  
                                            Fav
                                        </a>   
                                    @else
                                        {!! $row->star !!} 
                                    @endif  
                                    @if(is_null($row->on_eye))
                                        <a  href="{{ route('Notstarted.eyed', $row->id) }}" 
                                            class="badge bg-gray-700 bg-opacity-50" >  
                                            Eye
                                        </a>   
                                    @else
                                        {!! $row->on_eye !!} 
                                    @endif   
                                </div> 
                                <div> 
                                        <img src="{{ $row->league_logo }}" width="20px">
                                    <a  href="{{ route('Notstarted.league', 
                                            [
                                                'leagueapi_id' => $row->leagueapi_id,
                                                'season' => $row->season,
                                            ] ) }}" 
                                        class="badge bg-gray-700 bg-opacity-50" >   
                                        {{ $row->league_country }} - {{ $row->league_name }}  {{ $row->season }}    
                                    </a>  
                                    <span class="badge bg-gray-700 bg-opacity-50" >
                                        {{ $row->fixtureapi_id }}
                                    </span>
                                </div> 
                                <div>
                                    @if($row->league->bookmakersapi_id == 11) 
                                        <a  href="{{ route('Compare.all_odds', $row->fixtureapi_id) }}" 
                                            class="badge bg-primary" >   
                                            {{ $row->league->bookmakers_name }}   
                                        </a>   
                                    @elseif($row->league->bookmakersapi_id == 8)
                                        <a  href="{{ route('Compare.all_odds', $row->fixtureapi_id) }}" 
                                            class="badge bg-success" >   
                                            {{ $row->league->bookmakers_name }}   
                                        </a>   
                                    @else 
                                        <span class="badge bg-info  ">
                                            nobook  
                                        </span>
                                    @endif  
                                    <x-studio_v30.badge-fixture-status 
                                        link="https://www.google.com/search?client=firefox-b-d&q={!! $row->teams_home !!}+vs+{!! $row->teams_away !!}+flashscore" 
                                        nama="{{ $row->fixture_status }}"/>  
                                    <span  class="badge bg-gray-800 mt-2" >  
                                        {{ $row->round }} 
                                    </span>  
                                    @if(is_null($row->one))
                                        <a  href="{{ route('Notstarted.setone', $row->id) }}" 
                                            class="badge bg-gray-700 bg-opacity-50" >  
                                            One
                                        </a>   
                                    @else
                                        {!! $row->one !!} 
                                    @endif  
                                </div> 
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <a href="{{ route('Patternlists.pattern_pre',
                                                [
                                                    'id' => $row->id,
                                                    'leagueapi_id' => $row->leagueapi_id,
                                                    'status' => 'general',     
                                                ] 
                                                ) }}" target="_blank" class="badge bg-gray-800 mt-2" >  
                                            p{{ $row->pre_ah_pattern }} 
                                        </a>   
                                        <br/> 
                                        <span  class="badge bg-gray-800 mt-2" >  
                                            p{{ $row->pre_gou_pattern }} 
                                        </span>  
                                    </div>
                                    <div class="col-6 text-start">
                                        <a href="{{ route('Patternlists.pattern_end',
                                                [
                                                    'id' => $row->id,
                                                    'leagueapi_id' => $row->leagueapi_id,
                                                    'status' => 'general',       
                                                ] 
                                                ) }}" target="_blank" class="badge bg-gray-800 mt-2" >  
                                            e{{ $row->end_ah_pattern }} 
                                        </a>   
                                        <br/> 
                                        <a href="{{ route('Patternlists.pattern_onlyend',
                                                [
                                                    'id' => $row->id,
                                                    'leagueapi_id' => $row->leagueapi_id,
                                                    'status' => 'general',       
                                                ] 
                                                ) }}" target="_blank" class="badge bg-gray-800 mt-2" >  
                                            e{{ $row->end_gou_pattern }} 
                                        </a>    
                                    </div> 
                                </div> 
                                <div class="row"> 
                                    <div class="col-12 text-center">
                                        @if($row->other_pattern > 0)
                                            <span  class="badge bg-gray-800 mt-2" >  
                                                other pattern : {{ $row->other_pattern }} 
                                            </span>   
                                        @endif
                                    </div>
                                </div> 
                            </div> 
                        </div> 
                    </div>
                    <!-- END card-body -->
                </div> 
                <div class="card mb-3 flex-1 ">
                    <!-- BEGIN card-body -->
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center">  
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <h5 class="mb-1">
                                            <img src="{{ $row->teams_home_logo }}" width="20px">

                                                {{ substr($row->teams_home, 0, 13) }} 
                                        </h5>
                                    </div>
                                    <div class="col-6 text-center">
                                        <h5 class="mb-1"> 
                                            {{ substr($row->teams_away, 0, 13) }} 
                                            <img src="{{ $row->teams_away_logo }}" width="20px">
                                        </h5>
                                    </div> 
                                </div>  
                                <div class="row mb-2">
                                    <div class="col-5 text-center"> 
                                        <div class="row">
                                            <div class="col-6 text-end"> 
                                                {{ number_format($row->goals_for_home_ratio,2,".",",") }}
                                            </div>
                                            <div class="col-6 text-start"> 
                                                {{ number_format($row->goals_againts_home_ratio,2,".",",") }} 
                                            </div>
                                        </div>
                                        {{ number_format($row->goals_avg_per_match_home,2,".",",") }}  
                                    </div>
                                    <div class="col-2 text-center"> 
                                        {{ number_format(($row->goals_for_away_ratio - $row->goals_for_home_ratio),2,".",",") }}
                                        <br/>
                                        {{ number_format((($row->goals_avg_per_match_home + $row->goals_avg_per_match_away) / 2),2,".",",") }}
                                    </div>
                                    <div class="col-5 text-center"> 
                                        <div class="row">
                                            <div class="col-6 text-end"> 
                                                {{ number_format($row->goals_for_away_ratio,2,".",",") }}
                                            </div>
                                            <div class="col-6 text-start"> 
                                                {{ number_format($row->goals_againts_away_ratio,2,".",",") }} 
                                            </div>
                                        </div>  
                                        {{ number_format($row->goals_avg_per_match_away,2,".",",") }}   
                                    </div> 
                                </div>    
                                <div class="row">
                                    <div class="col-6 text-center"> 
                                        {!! $row->home_fx_status !!}
                                    </div>
                                    <div class="col-6 text-center">
                                        {!! $row->away_fx_status !!}
                                    </div> 
                                </div>  
                            </div> 
                        </div> 
                    </div>
                    <!-- END card-body -->
                </div> 
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-3 flex-1 "> 
                            <div class="card-body">
                                <div class="d-flex ">
                                    <div class="flex-grow-1  text-center">  
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5 class="mb-1">
                                                    Match Winner
                                                </h5>
                                            </div> 
                                        </div>  
                                        <div class="row">
                                            <div class="col-4 text-center">  
                                                {{ $row->pre_match_winner_home }}
                                                <br/>
                                                {{ $row->end_match_winner_home }}
                                            </div>
                                            <div class="col-4 text-center">  
                                                {{ $row->pre_match_winner_draw }}
                                                <br/>
                                                {{ $row->end_match_winner_draw }}
                                            </div>
                                            <div class="col-4 text-center"> 
                                                {{ $row->pre_match_winner_away }}   
                                                <br/>
                                                {{ $row->end_match_winner_away }}
                                            </div> 
                                        </div>     
                                    </div> 
                                </div> 
                            </div> 
                        </div>  

                        <div class="card mb-3 flex-1 "> 
                            <div class="card-body">
                                <div class="d-flex ">
                                    <div class="flex-grow-1  text-center">  
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5 class="mb-1">
                                                    2.5
                                                </h5>
                                            </div> 
                                        </div>  
                                        <div class="row">
                                            <div class="col-6 text-center">  
                                                {{ $row->pre_goals_overunder_over_25 }}
                                                <br/>
                                                {{ $row->end_goals_overunder_over_25 }}
                                            </div>
                                            <div class="col-6 text-center">  
                                                {{ $row->pre_goals_overunder_under_25 }}
                                                <br/>
                                                {{ $row->end_goals_overunder_under_25 }}
                                            </div> 
                                        </div>     
                                    </div> 
                                </div> 
                            </div> 
                        </div>  
                    </div>
                    <div class="col-6">
                        <div class="card mb-3 flex-1 "> 
                            <div class="card-body">
                                <div class="d-flex ">
                                    <div class="flex-grow-1  text-center">  
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5 class="mb-1">
                                                    BTTS
                                                </h5>
                                            </div> 
                                        </div>  
                                        <div class="row">
                                            <div class="col-6 text-center">  
                                                {{ $row->pre_both_teams_score_yes }}
                                                <br/>
                                                {{ $row->end_both_teams_score_yes }}
                                            </div>
                                            <div class="col-6 text-center">  
                                                {{ $row->pre_both_teams_score_no }}
                                                <br/>
                                                {{ $row->end_both_teams_score_no }}
                                            </div> 
                                        </div>     
                                    </div> 
                                </div> 
                            </div> 
                        </div>  

                        <div class="card mb-3 flex-1 "> 
                            <div class="card-body">
                                <div class="d-flex ">
                                    <div class="flex-grow-1  text-center">  
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5 class="mb-1">
                                                    3.5
                                                </h5>
                                            </div> 
                                        </div>  
                                        <div class="row">
                                            <div class="col-6 text-center">  
                                                {{ $row->pre_goals_overunder_over_35 }}
                                                <br/>
                                                {{ $row->end_goals_overunder_over_35 }}
                                            </div>
                                            <div class="col-6 text-center">  
                                                {{ $row->pre_goals_overunder_under_35 }}
                                                <br/>
                                                {{ $row->end_goals_overunder_under_35 }}
                                            </div> 
                                        </div>     
                                    </div> 
                                </div> 
                            </div> 
                        </div>  

                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        PRE {!! $row->on_predefine !!} 
                    </div>
                    <div class="col-12 text-center mb-4">
                        END {!! $row->on_enddefine !!} 
                    </div>
                    <div class="col-6">
                        <div class="card mb-3 flex-1 "> 
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1 text-center"> 
                                        {!! $row->pre_advices !!}
                                    </div> 
                                </div>  
                            </div> 
                        </div>  
                    </div>
                    <div class="col-6">
                        <div class="card mb-3 flex-1 "> 
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1 text-center"> 
                                        {!! $row->end_advices !!}
                                    </div> 
                                </div>  
                            </div> 
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-3 flex-1 "> 
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1 text-center"> 
                                        {!! $row->pre_advices_mirror !!}
                                    </div> 
                                </div>  
                            </div> 
                        </div>  
                    </div>
                    <div class="col-6">
                        <div class="card mb-3 flex-1 "> 
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1 text-center"> 
                                        {!! $row->end_advices_mirror !!}
                                    </div> 
                                </div>  
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
        </div> 
        <div class="row mb-4">
            <div class="col-3"> 
                <div class="card mb-3  "> 
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center"> 
                                First 
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center">  
                                <?php  
                                    if($row->pre_first_goal_scorer != "")
                                    {
                                        $temp_row =  $row->pre_first_goal_scorer;
                                        
                                        $temp_exp = explode(";",$temp_row );
                                        foreach($temp_exp as $rowx)
                                        {
                                            $temp_exp2 = explode(":",$rowx );

                                            if(isset($temp_exp2[1]))
                                            {
                                                if($temp_exp2[1] <= 4.00)
                                                {
                                                    echo $rowx; 
                                                    echo '<br/>';
                                                }
                                            }
                                        }
                                    } 
                                ?>
                            </div> 
                        </div> 
                    </div> 
                </div>
                <div class="card mb-3  "> 
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center"> 
                                First 
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center">  
                                <?php  
                                    if($row->end_first_goal_scorer != "")
                                    {
                                        $temp_row =  $row->end_first_goal_scorer;
                                        
                                        $temp_exp = explode(";",$temp_row );
                                        foreach($temp_exp as $rowx)
                                        {
                                            $temp_exp2 = explode(":",$rowx );

                                            if(isset($temp_exp2[1]))
                                            {
                                                if($temp_exp2[1] <= 4.00)
                                                {
                                                    echo $rowx; 
                                                    echo '<br/>';
                                                }
                                            }
                                        }
                                    } 
                                ?>
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="col-3"> 
                <div class="card mb-3  "> 
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center"> 
                                Pre Anytime 
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center">  
                                <?php 
 
                                    
                                    if($row->pre_anytime_goal_scorer != "")
                                    {
                                        $temp_row =  $row->pre_anytime_goal_scorer;
                                        
                                        $temp_exp = explode(";",$temp_row );
                                        foreach($temp_exp as $rowx)
                                        {
                                            $temp_exp2 = explode(":",$rowx );

                                            if(isset($temp_exp2[1]))
                                            {
                                                if($temp_exp2[1] <= 2.00)
                                                {
                                                    echo $rowx; 
                                                    echo '<br/>';
                                                }
                                            }
                                        }
                                    }

                                ?>
                            </div> 
                        </div> 
                    </div> 
                </div>
                <div class="card mb-3  "> 
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center"> 
                                End Anytime
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center">  
                                <?php 
 
                                    
                                    if($row->end_anytime_goal_scorer != "")
                                    {
                                        $temp_row =  $row->end_anytime_goal_scorer;
                                        
                                        $temp_exp = explode(";",$temp_row );
                                        foreach($temp_exp as $rowx)
                                        {
                                            $temp_exp2 = explode(":",$rowx );

                                            if(isset($temp_exp2[1]))
                                            {
                                                if($temp_exp2[1] <= 2.00)
                                                {
                                                    echo $rowx; 
                                                    echo '<br/>';
                                                }
                                            }
                                        }
                                    }

                                ?>
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="col-3"> 
                <div class="card mb-3  "> 
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center"> 
                                Pre Last
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center">  
                                <?php 
 
                                    
                                    if($row->pre_last_goal_scorer != "")
                                    {
                                        $temp_row =  $row->pre_last_goal_scorer;
                                        
                                        $temp_exp = explode(";",$temp_row );
                                        foreach($temp_exp as $rowx)
                                        {
                                            $temp_exp2 = explode(":",$rowx );

                                            if(isset($temp_exp2[1]))
                                            {
                                                if($temp_exp2[1] <= 4.00)
                                                {
                                                    echo $rowx; 
                                                    echo '<br/>';
                                                }
                                            }
                                        }
                                    }

                                ?>
                            </div> 
                        </div> 
                    </div> 
                </div>
                <div class="card mb-3  "> 
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center"> 
                                End Last
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center">  
                                <?php 
 
                                    
                                    if($row->end_last_goal_scorer != "")
                                    {
                                        $temp_row =  $row->end_last_goal_scorer;
                                        
                                        $temp_exp = explode(";",$temp_row );
                                        foreach($temp_exp as $rowx)
                                        {
                                            $temp_exp2 = explode(":",$rowx );

                                            if(isset($temp_exp2[1]))
                                            {
                                                if($temp_exp2[1] <= 4.00)
                                                {
                                                    echo $rowx; 
                                                    echo '<br/>';
                                                }
                                            }
                                        }
                                    }

                                ?>
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="col-3"> 
                <div class="card mb-3  "> 
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center"> 
                                Pre Doubled
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center">  
                                <?php 
 
                                    
                                    if($row->pre_to_score_two_or_more_goals != "")
                                    {
                                        $temp_row =  $row->pre_to_score_two_or_more_goals;
                                        
                                        $temp_exp = explode(";",$temp_row );
                                        foreach($temp_exp as $rowx)
                                        {
                                            $temp_exp2 = explode(":",$rowx );

                                            if(isset($temp_exp2[1]))
                                            {
                                                if($temp_exp2[1] <= 2.50)
                                                {
                                                    echo $rowx; 
                                                    echo '<br/>';
                                                }
                                            }
                                        }
                                    }

                                ?>
                            </div> 
                        </div> 
                    </div> 
                </div>
                <div class="card mb-3  "> 
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center"> 
                                End Doubled
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1 text-center">  
                                <?php 
 
                                    
                                    if($row->end_to_score_two_or_more_goals != "")
                                    {
                                        $temp_row =  $row->end_to_score_two_or_more_goals;
                                        
                                        $temp_exp = explode(";",$temp_row );
                                        foreach($temp_exp as $rowx)
                                        {
                                            $temp_exp2 = explode(":",$rowx );

                                            if(isset($temp_exp2[1]))
                                            {
                                                if($temp_exp2[1] <= 2.50)
                                                {
                                                    echo $rowx; 
                                                    echo '<br/>';
                                                }
                                            }
                                        }
                                    }

                                ?>
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
        <hr/>
        @empty 
            
    @endforelse 