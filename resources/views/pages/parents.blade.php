@extends('layouts.wee')
@section('content')
<section class="posts" style="padding-top: 91px;">
		<div class="container">
			<a href="#">
                <article>
                    <div class="pic"><img width="121" src="/assets/images/2.png" alt=""></div>
                    <div class="info">
                        <h3>Gauge Your Child’s performance</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo. </p>
                    </div>
                </article>
            </a>
			<a href="#parents" class="parents">
                <article>
                    <div class="pic"><img width="121" src="/assets/images/3.png" alt=""></div>
                    <div class="info">
                        <h3>Score Yourself</h3>
                        <p>Vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>
                    </div>
                </article>
            </a>
		</div>
		<!-- / container -->
	</section>
    <div class="student" id="parents">
		<h2>Parent's information</h2>
		<form action="/parents2">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Relation with child...</option><option>Father</option><option>Mother</option></select></fieldset>
			</div>
			<div class="right">
				<!-- <fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset> -->
				<fieldset class="name"><input placeholder="Age..." type="number" min="0"></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Submit</button>
			</div>
		</form>
	</div>
@endsection