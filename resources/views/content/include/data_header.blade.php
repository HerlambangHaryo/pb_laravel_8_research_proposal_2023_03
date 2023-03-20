<div id="datatable" class="mb-4">
    <div class="card">
        <div class="card-header">
            Data 
        </div>
        <div class="card-body">      
            <div>
                <table id="datatableDefaultx" class="table  ">
                    <thead class=" ">
                        <tr>               
                            <x-html.th-content title="Date" />   
                            <x-html.th-content title="League" /> 
                            <x-html.th-content title="Match" />    

                            <x-html.th-content title="Pre" />   
                            <x-html.th-content title="End" />   
                        </tr>
                    </thead>
                    <tbody>    
                        <tr>
                            <td  > 
                                {{ $first->tanggal }} 
                                <br/>
                                {{ $first->fixtureapi_id }} 
                                <br/>
                                
                                #{{ $first->leagueapi_id }}!
                                <br/>

                                @if($first->league->bookmakersapi_id == 11)
                                    <span class="badge bg-primary  ">
                                        {{ $first->league->bookmakers_name }}   
                                    </span>
                                @elseif($first->league->bookmakersapi_id == 8)
                                    <span class="badge bg-success  ">
                                        {{ $first->league->bookmakers_name }}   
                                    </span>
                                @else 
                                    <span class="badge bg-info  ">
                                        nobook  
                                    </span>
                                @endif 

                            </td> 
                            <td class="text-left"> 
                                <a  href="{{ route('Leagues.fixtures', 
                                    [
                                        'leagueapi_id' => $first->leagueapi_id,
                                        'season' => $first->season,
                                    ] ) }}" 
                                    class="   ">   

                                    <img src="{{ $first->league_flag }}" width="20px">

                                        {{ $first->league_country }}
                                </a>  

                                <br/> 
                                    
                                    <img src="{{ $first->league_logo }}" width="20px">
                                    {{ $first->league_name }} {{ $first->season }}    

                                <br/>
                                <span  class="badge bg-gray-800 mt-2" >  
                                    {{ $first->round }} 
                                </span>   
                            </td> 
                            <td class="text-left"> 
                                <?php
                                    $keyword = $first->teams_home.' '.$first->teams_away.' flashscore'; 
                                ?>


                                <img src="{{ $first->teams_home_logo }}" width="20px">

                                {{ $first->teams_home }}
                                {!! $first->home_fx_status !!}

                                <br/>

                                <img src="{{ $first->teams_away_logo }}" width="20px">

                                {{ $first->teams_away }}  
                                {!! $first->away_fx_status !!}

                                <br/>

                                <a  href="https://www.google.com/search?client=firefox-b-d&q={!! $first->teams_home !!}+vs+{!! $first->teams_away !!}+flashscore" 
                                    class="badge bg-dark" target="_blank" >  
                                    {{ $first->fixture_status }}  
                                </a>  
                                    
                                @if(is_null($first->star))
                                    <a  href="{{ route('Notstarted.stared', $first->id) }}" 
                                        class="badge bg-gray-700 bg-opacity-50" >  
                                        Fav
                                    </a>   
                                @else
                                    {!! $first->star !!} 
                                @endif  
                            </td>  
                            <td class="text-center"> 
                                <span  class="badge bg-gray-800 mt-2" >  
                                    p{{ $first->pre_ah_pattern }} 
                                </span>   
                                <br/> 
                                <span  class="badge bg-gray-800 mt-2" >  
                                    p{{ $first->pre_gou_pattern }} 
                                </span>   

                            </td>   
                            <td class="text-center"> 
                                <span  class="badge bg-gray-800 mt-2" >  
                                    e{{ $first->end_ah_pattern }} 
                                </span>   
                                <br/> 
                                <span  class="badge bg-gray-800 mt-2" >  
                                    e{{ $first->end_gou_pattern }} 
                                </span>  
                                
                            </td>  
                        </tr> 
                    </tbody>
                </table>   
            </div>    
            
            @if(!is_null($first->prediction_percent_home))
                <div class="mt-4">
                    <table id="datatableDefault" class="table  ">
                        <thead class=" ">
                            <tr>               
                                <x-html.th-content title=" " />    
                                <x-html.th-content title="Percentage" />  
                                <x-html.th-content title="Form" />  
                                <x-html.th-content title="Attack" />  
                                <x-html.th-content title="Defense" />  
                                <x-html.th-content title="Head" />  
                                <x-html.th-content title="Prediction" />  
                                <x-html.th-content title="Comparison" />  
                                <x-html.th-content title="Poisson" />  
                                <x-html.th-content title="Total" />  
                            </tr>
                        </thead>
                        <tbody>    
                            <tr>
                                <td> 
                                    {!! $first->teams_home !!}
                                    [{{ $first->teams_home_id }}]  
                                </td>
                                <td class="text-center  ">   
                                    {{ $first->prediction_percent_home }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_form_home > $first->comparison_form_away)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_form_home }} 
                                </td>
                                <td class="text-center
                                    @if($first->comparison_att_home > $first->comparison_att_away)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_att_home }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_def_home > $first->comparison_def_away)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_def_home }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_hh_home > $first->comparison_hh_away)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_hh_home }}
                                </td>
                                <td class="text-center
                                    @if($first->prediction_goals_home > $first->prediction_goals_away)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->prediction_goals_home }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_goals_home > $first->comparison_goals_away)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_goals_home }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_poisson_distribution_home > $first->comparison_poisson_distribution_away)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_poisson_distribution_home }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_total_home > $first->comparison_total_away)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_total_home }}
                                </td>
                            </tr> 
                            <tr>
                                <td> 
                                    {!! $first->teams_away !!}
                                    [{{ $first->teams_away_id }}]  
                                </td>
                                <td class="text-center  ">   
                                    {{ $first->prediction_percent_away }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_form_away > $first->comparison_form_home)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_form_away }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_att_away > $first->comparison_att_home)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_att_away }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_def_away > $first->comparison_def_home)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_def_away }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_hh_away > $first->comparison_hh_home)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_hh_away }}
                                </td>
                                <td class="text-center
                                    @if($first->prediction_goals_away > $first->prediction_goals_home)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->prediction_goals_away }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_goals_away > $first->comparison_goals_home)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_goals_away }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_poisson_distribution_away > $first->comparison_poisson_distribution_home)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_poisson_distribution_away }}
                                </td>
                                <td class="text-center
                                    @if($first->comparison_total_away > $first->comparison_total_home)
                                        bg-success
                                    @endif
                                    ">  
                                    {{ $first->comparison_total_away }}
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    X
                                </td>
                                <td class="text-center  ">   
                                    {{ $first->prediction_percent_draw }}
                                </td>
                                <td colspan="8">   
                                    W : {{ $first->prediction_winner_name }}
                                    <br/>
                                    C : {{ $first->prediction_winner_comment }}
                                    <br/>
                                    OU :{{ $first->prediction_underover }}
                                    <br/>
                                    Adv :{{ $first->prediction_advice }}  
                                </td>
                        </tbody>
                    </table>   
                </div>
            @endif
        </div>            
    </div>
</div> 