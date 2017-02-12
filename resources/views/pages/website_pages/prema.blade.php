@extends($layout)
@section('stylesheets')
  {!! Html::style('/assets/css/pages/website_pages/general.css') !!}
  {!! Html::style('/assets/css/pages/website_pages/events.css') !!}
@stop
@section('scripts')
<script src="/assets/js/pages/website_pages/events.js"></script>
@stop

@section('content')
<div class="container" style="padding-top:80px;background-color:black">
  <div class="jumbotron my-jumbotron" style="">
    <h1>Prema McKeever</h1>
  </div>
  	<div class="panel panel-default my-panel-default">
	  <div class="panel-body">
	  	<div class="col-md-8 col-sm-12 col-xs-12" >

			Prema combines more than 20 years of experience in Eastern medicine,
			meditation, emotional release work, and body-mind therapies to guide
			you in your journey to wholeness and clarity about who you really are.
			<br>
			By treating thousands of patients as a doctor of Chinese medicine she
			saw how vital our emotional health is for our physical health. Looking
			for ways to help herself and her patients release stored trauma in the
			body she discovered <a href="{!!route('get_bbtr_page')!!}">BioDynamic Breath & Trauma Release</a>.
			<br>
			She good fortune
			to be trained by its creator, Giten Tonkov, in Europe and the U.S. and
			considers it a sacred honor to facilitate and teach this deeply healing
			system of breath work. She is a certified Internal Alchemie coach and has
			trained in many therapeutic healing modalities including Hakomi
			(a body-centered system of psychotherapy), Tantra, pulsation, and
			bioenergetic chakra therapy at centers around the world, including
			Esalen and the Multiversity at the Osho International Meditation
			Resort in Pune, India.
			<br>
			Her own personal journey of meditation and self-discovery has taken her from
			the homes of shamans in the jungles of Peru, to Sufi gatherings in Turkey, to
			the ashrams of India. In 2010 the journey led her to participate in “The Path
			of Love”, an intense process of personal transformation that changed her life
			forever, and she now brings the Path of Love to the Vancouver area annually.
			Currently she offers individual sessions in <a href="{!!route('get_bbtr_page')!!}">Biodynamic Breath & Trauma
			Release</a> and facilitates groups in Osho Tantra, <a href="{!!route('get_bbtr_page')!!}">BioDynamic Breath & Trauma
			Release</a>, Osho Active Meditations, and Chakra Therapy. 
			<br>
			In individual
			sessions and groups, Prema’s focus is on transforming that which no
			longer serves you and creating a healthier, happier, and more passionate
			life.


	  	</div>
	  	<div class="col-md-4 col-sm-12 col-xs-12" >
	  		  <div class="col-xs-12 col-md-12">
			    <a class="thumbnail">
			      <img src="/assets/images/img/prema.jpg" alt="...">
			    </a>
			  </div>
	  	</div>

	  </div>
	</div>
</div>

@stop