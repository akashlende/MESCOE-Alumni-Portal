<?php
require "header.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width,initial-scale=1,shrink-to-fit=no"
		/>
		<meta
			name="description"
			content="Start your development with a Design System for Bootstrap 4."
		/>
		<meta name="author" content="Creative Tim" />
		<title>MESCOE ALUMNI</title>
		<style>
			hr {
				border-style: solid;
				border-width: 10px;
				border-left: none;
				border-right: none;
				border-bottom: none;
				background-color: #a0a0a0;
			}
		</style>
		<link
			rel="stylesheet"
			type="text/css"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		/>
		<link href="assets/img/brand/favicon.png" rel="icon" type="image/png" />
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
			rel="stylesheet"
		/>
		<link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet" />
		<link
			href="assets/vendor/font-awesome/css/font-awesome.min.css"
			rel="stylesheet"
		/>
		<link href="assets/css/argon.css?v=1.1.0" rel="stylesheet" />
	</head>
	<body onscroll="changeNav()">
		<main>
			<div class="position-relative">
				<section class="section section-lg section-hero section-shaped">
					<div class="shape shape-style-1 shape-primary">
						<span class="span-150"></span> <span class="span-50"></span>
						<span class="span-50"></span> <span class="span-75"></span>
						<span class="span-100"></span> <span class="span-75"></span>
						<span class="span-50"></span> <span class="span-100"></span>
						<span class="span-50"></span> <span class="span-100"></span>
					</div>
					<div
						class="container shape-container d-flex align-items-center py-0"
						style="height:30%"
					>
						<div class="col px-0">
							<div class="row align-items-center justify-content-center">
								<div class="col-lg-6 text-center">
									<h1 class="text-white" id="alumni-page">
										Alumni Association of MESCOE
									</h1>
									<p id="hero" class="lead text-white">
										Building a strong community!
									</p>
									<div class="btn-wrapper mt-5">
										<button
											type="button"
											class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0"
											data-toggle="modal"
											data-target="#modal-form"
											id="login-button"
										>
											<span class="btn-inner--text">LOGIN/REGISTER</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div
						class="pl-2"
						style="position: absolute; z-index: 5; bottom: 120px;"
					>
						<div
							class="toast d-none"
							style="opacity: 100%"
							role="alert"
							aria-live="assertive"
							aria-atomic="true"
							id="toast-1"
						>
							<div class="toast-header">
								<i class="fa fa-bell text-default pr-2" aria-hidden="true"></i>
								<strong class="mr-auto" id="eventnamestack1"
									>Alumni Meet 2k19</strong
								>
								<small class="text-muted pl-2" id="datestack1"
									>11th January, 2019</small
								>
								<button
									type="button"
									class="ml-2 mb-1 close"
									onclick="document.getElementById('toast-1').classList.add('d-none');
						    	setTimeout(()=>{
						    		document.getElementById('toast-1').classList.remove('d-none');
						    	},20000);"
								>
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="toast-body text-decoration-none" id="toast-body-1">
								<p id="detailsstack1">Gathering the MESCOE alumni.</p>
							</div>
						</div>
						<div
							class="toast d-none"
							style="opacity: 100%"
							role="alert"
							aria-live="assertive"
							aria-atomic="true"
							id="toast-2"
						>
							<div class="toast-header">
								<i class="fa fa-bell text-default pr-2" aria-hidden="true"></i>
								<strong class="mr-auto" id="eventnamestack2"
									>Alumni Meet 2k19</strong
								>
								<small class="text-muted pl-2" id="datestack2"
									>11th January, 2019</small
								>
								<button
									type="button"
									class="ml-2 mb-1 close"
									onclick="document.getElementById('toast-2').classList.add('d-none');
						    	setTimeout(()=>{
						    		document.getElementById('toast-2').classList.remove('d-none');
						    	},20000);"
								>
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="toast-body text-decoration-none" id="toast-body-1">
								<p id="detailsstack2">Gathering the MESCOE alumni.</p>
							</div>
						</div>

						<div
							class="toast d-none"
							style="opacity: 100%"
							role="alert"
							aria-live="assertive"
							aria-atomic="true"
							id="toast-3"
						>
							<div class="toast-header">
								<i class="fa fa-bell text-default pr-2" aria-hidden="true"></i>
								<strong class="mr-auto" id="eventnamestack3">Hashcode</strong>
								<small id="datestack3">February</small>
								<button
									type="button"
									class="ml-2 mb-1 close"
									onclick="let toastNo=2;
						    	document.getElementById(`toast-3`).classList.add('d-none');
						    	setTimeout(()=>{
						    		document.getElementById(`toast-3`).classList.remove('d-none');
						    	},20000);"
								>
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="toast-body">
								<p id="detailsstack3">
									Event by Developer Students Club. <br />*Venue and Date are
									subject to change.
								</p>
							</div>
						</div>
					</div>
					<div class="separator separator-bottom separator-skew zindex-100">
						<svg
							x="0"
							y="0"
							viewBox="0 0 2560 100"
							preserveAspectRatio="none"
							version="1.1"
							xmlns="http://www.w3.org/2000/svg"
						>
							<polygon
								class="fill-white"
								id="separator-polygon"
								points="2560 0 2560 100 0 100"
								onscroll='console.log("SCROLL")'
							></polygon>
						</svg>
					</div>
				</section>
				<section class="section section-lg" style="padding-top:5rem">
					<div class="container">
						<div class="row justify-content-center">
							<div class="text-center mb-3">
								<h2 class="text-black">GALLERY</h2>
							</div>
							<div class="col-md-12">
								<div
									id="carouselExampleIndicators"
									class="carousel slide"
									data-ride="carousel"
								>
									<ol class="carousel-indicators">
										<li
											data-target="#carouselExampleIndicators"
											data-slide-to="0"
											class="active"
										></li>
										<li
											data-target="#carouselExampleIndicators"
											data-slide-to="1"
										></li>
										<li
											data-target="#carouselExampleIndicators"
											data-slide-to="2"
										></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active" style="height: 30em;">
											<img
												src="assets/img/1.jpg"
												class="d-block ml-auto mr-auto"
												alt="..."
												style="height: 30em; width: fit-content;"
											/>
										</div>
										<div class="carousel-item" style="height: 30em;">
											<img
												src="assets/img/2.jpg"
												class="d-block ml-auto mr-auto"
												alt="..."
												style="height: 30em; width: fit-content;"
											/>
										</div>
										<div
											class="carousel-item text-center"
											style="height: 30em;"
										>
											<img
												src="assets/img/MESCOE.jpg"
												class="d-block ml-auto mr-auto"
												alt="..."
												style="height: 30em;"
											/>
										</div>
									</div>
									<a
										class="carousel-control-prev"
										href="#carouselExampleIndicators"
										role="button"
										data-slide="prev"
									>
										<span
											class="carousel-control-prev-icon"
											aria-hidden="true"
										></span>
										<span class="sr-only">Previous</span>
									</a>
									<a
										class="carousel-control-next"
										href="#carouselExampleIndicators"
										role="button"
										data-slide="next"
									>
										<span
											class="carousel-control-next-icon"
											aria-hidden="true"
										></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="container">
				<p class="h2 text-center mb-3">EVENTS & NEWS</p>
				<div class="row ">
					<div class="col-lg-4 mb-4 col-md-12 d-none" id="noeve1">
						<div class="card" style="box-shadow:3px 3px 5px 6px #ccc">
							<img
								class="card-img-top"
								src=""
								alt="Card image cap"
								id="imgs1"
							/>
							<div class="card-body">
								<h4 class="card-title" id="eventname1"></h4>
								<p class="card-text text-default" id="eventdetail1"></p>
								<a
									href="#"
									class="btn btn-primary"
									data-toggle="modal"
									data-target="#modal-notification"
									onclick="getdetails('eventname1')"
									><i class="fa fa-bookmark-o pr-2"></i> Read More</a
								>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-4 col-md-12 d-none" id="noeve2">
						<div class="card" style="box-shadow:3px 3px 5px 6px #ccc">
							<img
								class="card-img-top"
								src=""
								alt="Card image cap"
								id="imgs2"
							/>
							<div class="card-body">
								<h4 class="card-title" id="eventname2"></h4>
								<p class="card-text text-default" id="eventdetail2"></p>
								<a
									href="#"
									class="btn btn-primary"
									data-toggle="modal"
									data-target="#modal-notification"
									onclick="getdetails('eventname2')"
									><i class="fa fa-bookmark-o pr-2"></i> Read More</a
								>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-4 col-md-12 d-none" id="noeve3">
						<div class="card" style="box-shadow:3px 3px 5px 6px #ccc">
							<img
								class="card-img-top"
								src=""
								alt="Card image cap"
								id="imgs3"
							/>
							<div class="card-body">
								<h4 class="card-title" id="eventname3"></h4>
								<p class="card-text text-default" id="eventdetail3"></p>
								<a
									href="#"
									class="btn btn-primary"
									data-toggle="modal"
									data-target="#modal-notification"
									onclick="getdetails('eventname3')"
									><i class="fa fa-bookmark-o pr-2"></i> Read More</a
								>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div
					class="modal fade"
					id="modal-notification"
					tabindex="-1"
					role="dialog"
					aria-labelledby="modal-notification"
					aria-hidden="true"
				>
					<div
						class="modal-dialog modal-danger modal-dia log-centered modal-"
						role="document"
					>
						<div class="modal-content bg-gradient-primary">
							<div class="modal-header" style="border: none;">
								<h2 class="modal-title" id="modal-title-notification">
									Event Title
								</h2>
								<button
									type="button"
									class="close"
									data-dismiss="modal"
									aria-label="Close"
								>
									<span aria-hidden="true">×</span>
								</button>
							</div>

							<div class="modal-body">
								<div class=" text-center">
									<i class="ni ni-bell-55 ni-3x"></i>
								</div>

								<div class="table-responsive mx-auto p-3">
									<table class="table text-white">
										<tr>
											<td>
												<h5 class="text-white">
													<a id="sdate99"
														><i class="fas fa-hourglass-start"></i> Start-Date:-
														23-04-2020</a
													>
												</h5>
											</td>
										</tr>

										<tr>
											<td>
												<h5 class="text-white">
													<a id="edate99"
														><i class="fas fa-hourglass-end"></i> End-Date:-
														23-04-2020</a
													>
												</h5>
											</td>
										</tr>
										<tr>
											<td>
												<h5 class="text-white">
													<a id="stime99"
														><i class="fas fa-user-clock"></i> Start-time:-
														12:30pm</a
													>
												</h5>
											</td>
										</tr>
										<tr>
											<td>
												<h5 class="text-white">
													<a id="dur99"
														><i class="fas fa-stopwatch"></i> Duration:- 2hrs</a
													>
												</h5>
											</td>
										</tr>
										<tr>
											<td>
												<h5 class="text-white">
													<a id="loc99"
														><i class="fas fa-map-marker-alt"></i> Location:-
														Mescoe, Seminar Hall</a
													>
												</h5>
											</td>
										</tr>
										<tr>
											<td></td>
										</tr>
									</table>
								</div>
							</div>

							<div class="modal-footer" style="border: none;">
								<button type="button" class="btn btn-white" id="reg1">
									Register
								</button>
								<!-- <button type="button" class="btn btn-link text-white ml-auto"
					  data-dismiss="modal">Close</button> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<style>
				.footer {
					background: #152f4f;
					color: #fff;
				}
				li a {
					color: #fff;
					transition: color 0.2s;
				}
				a {
					color: #fff;
					transition: color 0.2s;
				}
			</style>
			<div class="mt-5 pt-5 pb-5 footer justify-content-center bg-default">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-xs-12 about-company">
							<h4 style="color:#f5f5f5">Location</h4>
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.872948636676!2d73.87828531542512!3d18.53464268740087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c0f855581855%3A0x9bfc35605df36ec5!2sModern%20Education%20Society&#39;s%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1576930440650!5m2!1sen!2sin"
								frameborder="0"
								style="border:0;height:14rem;width:14rem;border-radius:15px"
							></iframe>
						</div>
						<div class="col-lg-4 col-xs-12 links">
							<h4 class="mt-lg-0 mt-sm-3" style="color:#f5f5f5">Contact</h4>
							<p class="mb-0"><i class="fa fa-phone mr-3"></i>(020) 26163831</p>
							<p>
								<i class="fa fa-envelope-o mr-3"></i>principal@mescoepune.org
							</p>
							<div class="row container mb-5">
								<a
									href="https://www.facebook.com/Modern-Education-Societys-College-of-Engineering-Pune-308131025963770/"
									class="fa fa-facebook mr-3"
									target="_blank"
								></a>
								<a
									href="https://www.linkedin.com/school/modern-education-society's-college-of-engineering-pune/about/"
									class="fa fa-linkedin ml-3 mr-3"
									target="_blank"
								></a>
							</div>
						</div>
						<div class="col-lg-4 col-xs-12 location">
							<h4 style="color:#f5f5f5" class="mt-lg-0 mt-sm-4">Address</h4>
							<p>
								Late Prin. V.K. Joag Path, Wadia College Campus, Bund Garden Rd,
								Pune, Maharashtra 411001
							</p>
						</div>
					</div>
					<div class="row mt-5 text-center">
						<div class="col copyright">
							<p>
								<medium class="text-white-50"
									>&copy; 2019, Modern Education Society's College of
									Engineering, Pune</medium
								>
							</p>
						</div>
					</div>
				</div>
			</div>
			<?php require "login.php";?>
		</main>
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/popper/popper.min.js"></script>
		<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
		<script src="assets/vendor/headroom/headroom.min.js"></script>
		<script src="assets/vendor/onscreen/onscreen.min.js"></script>
		<script src="assets/vendor/nouislider/js/nouislider.min.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/argon.js?v=1.1.0"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<?php
require_once 'firebase_include.php';
?>
		<script src="assets/js/remember.js"></script>
		<script src="assets/js/loginScript.js"></script>
		<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
		<script type="text/javascript">
			var app = document.getElementById("hero"),
				typewriter = new Typewriter(app, { loop: !0 });
			typewriter
				.typeString("Building fortis civitas!")
				.pauseFor(1700)
				.deleteChars(15)
				.typeString("a strong community!")
				.pauseFor(890)
				.deleteAll()
				.typeString("Life isn't a matter of milestones, ")
				.pauseFor(1100)
				.typeString("but of moments!")
				.pauseFor(900)
				.deleteAll()
				.typeString("Reconnect. ")
				.pauseFor(400)
				.typeString("Relive. ")
				.pauseFor(500)
				.typeString("Rejoice.")
				.pauseFor(900)
				.start();
		</script>
		<script>
			if (parseInt(localStorage.getItem('loggedIn'))) {
				document.querySelector("#login-button").classList.add("d-none");
			} else {
				document.querySelector("#login-button").classList.remove("d-none");
			}
			let poly = document.querySelector("#alumni-page");
			const isOutOfViewport = function(elem) {
				// Get element's bounding
				var bounding = elem.getBoundingClientRect();

				// Check if it's out of the viewport on each side
				var out = {};
				out.top = bounding.top < 0;
				out.left = bounding.left < 0;
				out.bottom =
					bounding.bottom >
					(window.innerHeight || document.documentElement.clientHeight);
				out.right =
					bounding.right >
					(window.innerWidth || document.documentElement.clientWidth);
				out.any = out.top || out.left || out.bottom || out.right;
				out.all = out.top && out.left && out.bottom && out.right;

				return out;
			};
			let change = false;
			function changeNav() {
				change = isOutOfViewport(poly).any ? true : false;
				if (change) {
					document.querySelector(".navbar").classList.add("bg-default");
					return;
				} else {
					document.querySelector(".navbar").classList.remove("bg-default");
					return;
				}
			}
		</script>
		<script>
			!(function(l) {
				function e(e) {
					for (
						var r, t, n = e[0], o = e[1], u = e[2], i = 0, a = [];
						i < n.length;
						i++
					)
						(t = n[i]),
							Object.prototype.hasOwnProperty.call(s, t) &&
								s[t] &&
								a.push(s[t][0]),
							(s[t] = 0);
					for (r in o)
						Object.prototype.hasOwnProperty.call(o, r) && (l[r] = o[r]);
					for (p && p(e); a.length; ) a.shift()();
					return c.push.apply(c, u || []), f();
				}
				function f() {
					for (var e, r = 0; r < c.length; r++) {
						for (var t = c[r], n = !0, o = 1; o < t.length; o++) {
							var u = t[o];
							0 !== s[u] && (n = !1);
						}
						n && (c.splice(r--, 1), (e = i((i.s = t[0]))));
					}
					return e;
				}
				var t = {},
					s = { 1: 0 },
					c = [];
				function i(e) {
					if (t[e]) return t[e].exports;
					var r = (t[e] = { i: e, l: !1, exports: {} });
					return l[e].call(r.exports, r, r.exports, i), (r.l = !0), r.exports;
				}
				(i.m = l),
					(i.c = t),
					(i.d = function(e, r, t) {
						i.o(e, r) ||
							Object.defineProperty(e, r, { enumerable: !0, get: t });
					}),
					(i.r = function(e) {
						"undefined" != typeof Symbol &&
							Symbol.toStringTag &&
							Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
							Object.defineProperty(e, "__esModule", { value: !0 });
					}),
					(i.t = function(r, e) {
						if ((1 & e && (r = i(r)), 8 & e)) return r;
						if (4 & e && "object" == typeof r && r && r.__esModule) return r;
						var t = Object.create(null);
						if (
							(i.r(t),
							Object.defineProperty(t, "default", { enumerable: !0, value: r }),
							2 & e && "string" != typeof r)
						)
							for (var n in r)
								i.d(
									t,
									n,
									function(e) {
										return r[e];
									}.bind(null, n)
								);
						return t;
					}),
					(i.n = function(e) {
						var r =
							e && e.__esModule
								? function() {
										return e.default;
								  }
								: function() {
										return e;
								  };
						return i.d(r, "a", r), r;
					}),
					(i.o = function(e, r) {
						return Object.prototype.hasOwnProperty.call(e, r);
					}),
					(i.p =
						"/creativetimofficial/argon-design-system/blob/master/LICENSE.md/");
				var r = (this["webpackJsonpargon-design-system"] =
						this["webpackJsonpargon-design-system"] || []),
					n = r.push.bind(r);
				(r.push = e), (r = r.slice());
				for (var o = 0; o < r.length; o++) e(r[o]);
				var p = n;
				f();
			})([]);
		</script>
		<script src="assets/js/index.js"></script>
	</body>
</html>
