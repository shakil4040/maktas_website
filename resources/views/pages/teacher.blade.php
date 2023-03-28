@extends('layouts.wee')
@section('content')
<section class="posts" style="padding-top: 91px;">
		<div class="container">
			<a class="lesson1" href="#">
                <article>
                    <div class="pic"><img width="121" src="/assets/images/2.png" alt=""></div>
                    <div class="info">
                        <h3>Teach Student Online</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo. </p>
                    </div>
                </article>
            </a>
			<a class="lesson1" href="#">
                <article>
                    <div class="pic"><img width="121" src="/assets/images/3.png" alt=""></div>
                    <div class="info">
                        <h3>Write Essays/ Lesson for the Website</h3>
                        <p>Vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>
                    </div>
                </article>
            </a>
		</div>
		<!-- / container -->
	</section>

    <div id="lesson2" class="container" style="position:unset;">
		<a href="/gauge-yourself3" class="info-request">
			<span class="holder">
                <span class="title">Show me list of lessons.</span>
				<span class="text">Temporibus autem quibusdam et aut debitis aut rerum necessitatibus saepe!</span>
			</span>
			<span class="arrow" style="margin-top:unset;transform:unset;"></span>
		</a>
	</div>

    <script>
        $(document).ready(function(){
            $("#lesson2").hide();
            $('.lesson1').click(function(){
                $('#lesson2').show();
            })
        })
    </script>
    
@endsection