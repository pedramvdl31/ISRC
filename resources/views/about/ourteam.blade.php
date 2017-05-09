@extends($layout)
@section('stylesheets')
	<link rel="stylesheet" href="/assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="/assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">

@stop
@section('scripts')
<script type="text/javascript" src="/assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="/assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>
@stop

@section('content')

		<!--=== Breadcrumbs v3 ===-->
		<div class="breadcrumbs-v3 img-v1">
			<div class="container text-center">
				<p>Meet Our Tribe</p>
				<h1>Our Professional Team Members</h1>
			</div><!--/end container-->
		</div>
		<!--=== End Breadcrumbs v3 ===-->

		<!--=== Cube Portfolio ===-->
		<div class="cube-portfolio container content-sm margin-bottom-30">
			<div id="filters-container" class="cbp-l-filters-text no-padding">
				<div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div> |
				<div data-filter=".founder" class="cbp-filter-item"> Founder </div> |
				<div data-filter=".facilitator" class="cbp-filter-item"> Facilitators </div> |
				<div data-filter=".advisoryboard" class="cbp-filter-item"> Advisory Board </div> |
				<div data-filter=".team" class="cbp-filter-item">UBU Team </div>
			</div><!--/end Filters Container-->

			<div id="grid-container" class="cbp-l-grid-gallery">
				<div class="cbp-item founder team facilitator teamall">
					<a href="/assets/ajax/cube-portfolio/team1.html" class="cbp-caption cbp-singlePageInline"
						data-title="World Clock Widget<br>by WENDY MORRISON">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/1.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">UBU Today Founder - Facilitator</div>
									<div class="cbp-l-caption-title text-uppercase">WENDY MORRISON</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item facilitator teamall">
					<a href="/assets/ajax/cube-portfolio/team3.html" class="cbp-caption cbp-singlePageInline"
						data-title="WhereTO App<br>by Jean-Paul LaCroix">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/3.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Cocoon Modality Founder & Facilitator</div>
									<div class="cbp-l-caption-title text-uppercase">Jean-Paul LaCroix</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item facilitator teamall">
					<a href="/assets/ajax/cube-portfolio/team2.html" class="cbp-caption cbp-singlePageInline"
						data-title="Bolt UI<br>by Giten Tonkov">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/2.JPG" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Founder & Faciltator of Biodynamic Breath (BBTR)</div>
									<div class="cbp-l-caption-title text-uppercase">Giten Tonkov</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item facilitator teamall">
					<a href="/assets/ajax/cube-portfolio/team6.html" class="cbp-caption cbp-singlePageInline"
						data-title="Remind~Me Widget<br>by Mark Handler">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/6.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Tibetan Bowl Master Founder and Facilitator</div>
									<div class="cbp-l-caption-title text-uppercase">Mark Handler</div>
								</div>
							</div>
						</div>
					</a>
				</div>
<!-- 				<div class="cbp-item cofacilitator teamall">
					<a href="/assets/ajax/cube-portfolio/team15.html" class="cbp-caption cbp-singlePageInline"
						data-title="iDevices<br>by James Morrison">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/ph.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Co-Facilitator</div>
									<div class="cbp-l-caption-title text-uppercase">James Morrison</div>
								</div>
							</div>
						</div>
					</a>
				</div> -->
<!-- 				<div class="cbp-item facilitator teamall">
					<a href="/assets/ajax/cube-portfolio/team7.html" class="cbp-caption cbp-singlePageInline"
						data-title="Workout Buddy<br>by Steve Arnst">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/7.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Facilitator</div>
									<div class="cbp-l-caption-title text-uppercase">Steve Arnst</div>
								</div>
							</div>
						</div>
					</a>
				</div> -->
				<div class="cbp-item cofacilitator teamall team">
					<a href="/assets/ajax/cube-portfolio/team14.html" class="cbp-caption cbp-singlePageInline"
						data-title="iDevices<br>by Chris Sincic">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/14.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc"> VP of Charitable Contributions & Fundraising</div>
									<div class="cbp-l-caption-title text-uppercase">Chris Sincic</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item facilitator teamall">
					<a href="/assets/ajax/cube-portfolio/team4.html" class="cbp-caption cbp-singlePageInline"
						data-title="iDevices<br>by Prema McKeever">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/4.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Certified Practitioner - Facilitator</div>
									<div class="cbp-l-caption-title text-uppercase">Prema McKeever</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item advisoryboard teamall">
					<a href="/assets/ajax/cube-portfolio/team5.html" class="cbp-caption cbp-singlePageInline"
						data-title="Seemple* Music for iPad<br>by Julie Melody">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/5.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">VP of Charitable Contributions </div>
									<div class="cbp-l-caption-title text-uppercase">Julie Melody</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item advisoryboard teamall">
					<a href="/assets/ajax/cube-portfolio/team16.html" class="cbp-caption cbp-singlePageInline"
						data-title="Seemple* Music for iPad<br>by Greg Michaud">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/16.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Advisory Board </div>
									<div class="cbp-l-caption-title text-uppercase">Greg Michaud</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item advisoryboard">
					<a href="/assets/ajax/cube-portfolio/team17.html" class="cbp-caption cbp-singlePageInline"
						data-title="Seemple* Music for iPad<br>by Gail Krieger">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/ph.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Advisory Board </div>
									<div class="cbp-l-caption-title text-uppercase">Gail Krieger</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item advisoryboard">
					<a href="/assets/ajax/cube-portfolio/team19.html" class="cbp-caption cbp-singlePageInline"
						data-title="Seemple* Music for iPad<br>by Debi Cain">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/19.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Advisory Board </div>
									<div class="cbp-l-caption-title text-uppercase">Edward Mark Lichten</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item advisoryboard">
					<a href="/assets/ajax/cube-portfolio/team18.html" class="cbp-caption cbp-singlePageInline"
						data-title="Seemple* Music for iPad<br>by Debi Cain">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/ph.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Advisory Board </div>
									<div class="cbp-l-caption-title text-uppercase">Debi Cain</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item advisoryboard teamall">
					<a href="/assets/ajax/cube-portfolio/team13.html" class="cbp-caption cbp-singlePageInline"
						data-title="Seemple* Music for iPad<br>by Sandie Melody">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/13.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Advisory Board </div>
									<div class="cbp-l-caption-title text-uppercase">Sandie Kisting</div>
								</div>
							</div>
						</div>
					</a>
				</div>
<!-- 				<div class="cbp-item facilitator teamall">
					<a href="/assets/ajax/cube-portfolio/team8x.html" class="cbp-caption cbp-singlePageInline"
						data-title="Digital Menu<br>by Julien LaCroix">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/8.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Facilitator</div>
									<div class="cbp-l-caption-title text-uppercase">Julien LaCroix</div>
								</div>
							</div>
						</div>
					</a>
				</div> -->
<!-- 				<div class="cbp-item facilitator teamall">
					<a href="/assets/ajax/cube-portfolio/team9x.html" class="cbp-caption cbp-singlePageInline"
						data-title="Holiday Selector<br>by Argyro Davanelou">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/9.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Practitioner of Acupuncture - Facilitator</div>
									<div class="cbp-l-caption-title text-uppercase">Argyro Davanelou</div>
								</div>
							</div>
						</div>
					</a>
				</div> -->
				<div class="cbp-item facilitator teamall">
					<a href="/assets/ajax/cube-portfolio/team12.html" class="cbp-caption cbp-singlePageInline"
						data-title="Holiday Selector<br>by Amanda Johnson">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/12.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">Facilitator</div>
									<div class="cbp-l-caption-title text-uppercase">Amanda Johnson</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item team teamall">
					<a href="/assets/ajax/cube-portfolio/team10.html" class="cbp-caption cbp-singlePageInline"
						data-title="Workout Buddy<br>by Caitlin Vogel">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/10.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">VP of Marketing & Sales</div>
									<div class="cbp-l-caption-title text-uppercase">Caitlin Vogel</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="cbp-item team teamall">
					<a href="/assets/ajax/cube-portfolio/team11.html" class="cbp-caption cbp-singlePageInline"
						data-title="Workout Buddy<br>by Cooper">
						<div class="cbp-caption-defaultWrap">
							<img src="/assets/images/about/11.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-desc">VP of Information Technology</div>
									<div class="cbp-l-caption-title text-uppercase">Cooper</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div><!--/end Grid Container-->
		</div>
		<!--=== End Cube Portfolio ===-->

		<!--=== Call To Action v2 ===-->
		<div class="call-action-v2">
			<div class="container">
				<h2>Would you like to join our team?</h2>
				<p>contact us, we will get back to you </p>
				<a href="mailto:info@ubutoday.com">Info@ubutoday.com</a>
			</div>
		</div>
		<!--=== End Call To Action v2 ===-->

@stop