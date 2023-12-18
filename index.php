<?php
    $title = 'Registration'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    $results = $crud->getgender();

?>

<div class="container">

							<header class="healthcarePod"> RECENT STORIES </header>
			
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6">
					
					
						<h3>Why did the Crime Junkie Podcast reference this episode of the Something Was Wrong Podcast? </h3>
						<p>
							In this episode Jez a friend of host Tiffany Reese shares a terrfying experience she had while online dating.
						 But after looking into it further in 
						 <a
								class="linkColor"
								href="https://open.spotify.com/episode/0u6GPJ20MQyKrOevUj6zpD"
								> this </a
							>  episode, the Crime Junkie hosts uncover something potentially even more sinister.
						  	
						</p>
						<p>
							<iframe sandbox="allow-same-origin allow-scripts allow-top-navigation allow-popups allow-forms" 
							scrolling=no 
							width="100%" height="150" 
							frameborder="0" 
							src="https://embed.radiopublic.com/e?if=something-was-wrong-WRw4L3&ge=s1!109271f1cc9c1007d93d187b9f67c89d3f43f3cc"></iframe>
						
							
							<a
								class="linkColor"
								href="https://open.spotify.com/episode/45nTKMzHaRisfOJ4aj8Lga"
								></a
							>
							
						</p>
					</div>
				
				

				<div class="col-sm-12 col-md-12 col-lg-6">
					<img src="./images/transcription.jpg" 
					style="width: 100%" height = "100%" />
					<div class="text-left carousel-caption black-background">
						<h2>Thinking about transcribing your podcast?</h2>
						<p class="tagline">
							Click
							<a
								class="linkColor"
								href="https://www.podcast.co/create/transcribe-podcasts"
								>here</a
							>
							for more information
						</p>
					</div>
				</div>
			</div>
		
			<header class="healthcarePod"> LAST WEEK'S STORIES </header>

			<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="card" 
								style="width: 100%;">
										<div class="card-body">
											<h5 class="card-title">Podcasting projected to be a $1 billion industry by 2021</h5>
											<h6 class="card-subtitle mb-2 text-muted"></h6>
											<p class="card-text"> <img src="./images/business_insider.jpg" 
												style="width: 100%" height = "100%" />
												A recent Business Insider report details how the growing 
												industry is expected to develop over the coming year, how Spotify, Apple and similar platforms are innovating this and what it means for brands. Read the full report
													<a
										class="linkColor"
										href="https://www.businessinsider.com/the-podcast-industry-report?r=US&IR=T"
										> here </a>  
									
													</p>
										 
										</div>
									</div>
								
					 
					</div>
				
			
					<div class="col-sm-12 col-md-12 col-lg-4">
							<div class="card" 
							style="width: 100%;">
									<div class="card-body">
										<h5 class="card-title">The Crown Netflix: Erin Doherty interview</h5>
										<h6 class="card-subtitle mb-2 text-muted"></h6>
										<p class="card-text">		<img src="./images/erin_doherty.jpg" 
											style="width: 100%" height = "100%" />
											Host's Tolani Shoneye and Gena-mour Barrett interview The Crown's princess Anne
												<a
													class="linkColor"
													href="https://open.spotify.com/episode/6hqRB1opFBh9SLMdz1Q183"
													>here.</a
												>
							
												</p>
									 
									</div>
								</div>
							
				 
				</div>
					



				
				
				
			

					<div class="col-sm-12 col-md-12 col-lg-4">
							<div class="card" 
							style="width: 100%;">
									<div class="card-body">
										<h5 class="card-title">Can you really learn how to code in one month?</h5>
										
										<h6 class="card-subtitle mb-2 text-muted"></h6>
										<p class="card-text"> <iframe src="https://open.spotify.com/embed-podcast/show/2dGDlNN7GOqJjy7Qlr3ECF"  width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> Host Chris Castiglione (OneMonth.com) simplifies coding for beginners and explains his journey into coding as well as why and how you can learn new coding languages.
												
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
<?php require_once 'includes/footer.php'; ?>