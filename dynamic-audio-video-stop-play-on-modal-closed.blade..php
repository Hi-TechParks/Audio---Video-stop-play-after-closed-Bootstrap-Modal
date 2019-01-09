@if($audio)
<div class="col-sm-4 text-center">
    @if(!$RecitationDetail->AUDIO_FLAG)
        <button href="" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title='কোন  অডিও নেই' disabled>  অডিও</button>
    @else

        <button type="button" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target="#audio-{{$RecitationDetail->RECITATION_ID}}"> অডিও </button>
        <!-- Large modal -->
        <div class="modal fade" id="audio-{{$RecitationDetail->RECITATION_ID}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div>
                        <div class="panel">
                            <div class="row">
                                <div class="col-md-6">
                                    @if($RecitationDetail->IMAGE_FILE_PATH !=NULL )
                                        <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$RecitationDetail->IMAGE_FILE_PATH)}}" class="img-responsive center-block" onerror="this.src='/assets2/img/audio.jpg';" alt="Image" style="width: 70%; padding: 10px">
                                    @else
                                        <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/avatar.jpg')}}" class="img-responsive center-block"  onerror="this.src='/assets2/img/audio.jpg';" alt="Image" style="width: 70%; padding: 10px;">
                                    @endif
                                </div>
								
                                <div class="col-md-6 text-left">
                                    {{--<h3 style="padding: 10px">{{  $RecitationDetail->RECITER_NAME }}</h3>--}}
									<table style="float: left; padding: 10px; margin: 10px;">
										<tr><th>আবৃত্তিকার </th><td> &nbsp;: {{  $RecitationDetail->RECITER_NAME }}</td></tr>
										<tr><th>কবিতা </th><td> &nbsp;: {{  $RecitationDetail->POEM_NAME }}</td></tr>
										<tr><th>কবি </th><td> &nbsp;: {{  $RecitationDetail->AUTHOR_NAME }}</td></tr>
									</table>
							    </div>
                            </div>						
                        </div>
                        <div class="panel panel-danger">
                            <audio controls>
                                <source src="{{$RecitationDetail->AUDIO_FILE_PATH }}" type="audio/ogg">
                                <source src="{{$RecitationDetail->AUDIO_FILE_PATH }}" type="audio/wav">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Stop Play Audio When Modal Closed -->
        <script type="text/javascript">
            $('#audio-{{$RecitationDetail->RECITATION_ID}}').on('hide.bs.modal', function () { //Change #myModal with your modal id
                  $('audio').each(function(){
                    this.pause(); // Stop playing
                    this.currentTime = 0; // Reset time
                  }); 
            })
        </script>

    @endif
</div>
@else

<div class="col-sm-4 text-center">
    <button href="" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title='কোন অডিও নেই' disabled>  অডিও</button>
</div>

@endif

@if($vedio)
<div class="col-sm-4 text-center">
    @if(!$RecitationDetail->VIDEO_FLAG)
        <button href="" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title='কোন ভিডিও নেই' disabled>  ভিডিও</button>
    @else
        {{--<button href="/recitation/vedio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-danger btn-sm">  ভিডিও</button>--}}

        <button type="button" class="btn btn-danger btn-sm" role="button" data-toggle="modal" data-target="#vedio-{{$RecitationDetail->RECITATION_ID}}"> ভিডিও </button>
        <!-- Large modal -->
        <div class="modal fade" id="vedio-{{$RecitationDetail->RECITATION_ID}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="panel panel-danger" style=" padding: 15px">
                        {!! $RecitationDetail->VIDEO_LINK !!}
                    </div>

                </div>
            </div>
        </div>

        <!-- Stop Play Youtube Video When Modal Closed -->
        <script type="text/javascript">
             $("#vedio-{{$RecitationDetail->RECITATION_ID}}").on('hidden.bs.modal', function (e) {

                  $("#vedio-{{$RecitationDetail->RECITATION_ID}} iframe").attr("src", $("#vedio-{{$RecitationDetail->RECITATION_ID}} iframe").attr("src"));

            });
        </script>

    @endif
</div>
@else

<div class="col-sm-4 text-center">
    <button href="" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title='কোন ভিডিও নেই' disabled>  ভিডিও</button>
</div>

@endif