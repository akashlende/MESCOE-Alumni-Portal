<div class="col-md-4">
	<div
		class="modal fade"
		id="modal-form"
		tabindex="-1"
		role="dialog"
		aria-labelledby="modal-form"
		aria-hidden="true"
	>
		<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
			<div class="modal-content">
				<div id="login-modal-header" class="modal-header bg-default">
					<h3 style="color: #fff" class="mt-auto mb-auto">Login</h3>
					<button
						type="button-info"
						class="close"
						data-dismiss="modal"
						aria-label="Close"
					>
						<span aria-hidden="true" class="text-secondary">&times;</span>
					</button>
				</div>
				<div id="register-modal-header" class="modal-header bg-default d-none">
					<h3 style="color: #fff" class="mt-auto mb-auto">Register</h3>
					<button
						type="button"
						class="close"
						data-dismiss="modal"
						aria-label="Close"
					>
						<span aria-hidden="true" class="text-secondary">&times;</span>
					</button>
				</div>
				<div id="reset-modal-header" class="modal-header bg-default d-none">
					<h3 style="color: #fff" class="mt-auto mb-auto">Reset Password</h3>
					<button
						type="button"
						class="close"
						data-dismiss="modal"
						aria-label="Close"
					>
						<span aria-hidden="true" class="text-secondary">&times;</span>
					</button>
				</div>
				<div class="modal-body p-0">
					<div class="card bg-secondary shadow border-0">
						<div class="card-header bg-transparent pb-5" id="social-sign-in">
							<div class="text-center mt-2 mb-3 h4">
								<small style="color: #172B4D">Sign in with</small>
							</div>
							<div class="btn-wrapper text-center">
								<a
									id="google-sign-in"
									href="#"
									class="btn btn-neutral btn-icon"
								>
									<span class="btn-inner--icon"
										><img src="assets/img/icons/common/google.svg"
									/></span>
								</a>
								<a
									id="github-sign-in"
									href="#"
									class="btn btn-neutral btn-icon"
								>
									<span class="btn-inner--icon"
										><img src="assets/img/icons/common/github.svg"
									/></span>
								</a>
								<a
									id="twitter-sign-in"
									href="#"
									class="btn btn-neutral btn-icon"
								>
									<span class="btn-inner--icon"
										><img src="assets/img/icons/common/twitter.svg"
									/></span>
								</a>
								<a
									id="facebook-sign-in"
									href="#"
									class="btn btn-neutral btn-icon"
								>
									<span class="btn-inner--icon"
										><img src="assets/img/icons/common/facebook.svg"
									/></span>
								</a>
							</div>
						</div>
						<div class="card-body px-lg-5 py-lg-5">
							<div class="text-center text-default mb-4">
								<small id="sign-in-text" class="h5"
									>Or sign in with credentials</small
								>
							</div>
							<form role="form" id="login">
								<div class="form-group mb-3">
									<div class="input-group input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"
												><i class="fa fa-envelope" aria-hidden="true"></i
											></span>
										</div>
										<input
											id="txtEmail"
											class="form-control text-default"
											placeholder="Email"
											type="email"
										/>
									</div>
								</div>
								<div class="form-group" id="password-field">
									<div class="input-group input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"
												><i class="fa fa-lock" aria-hidden="true"></i
											></span>
										</div>
										<input
											id="txtPassword"
											class="form-control text-default"
											placeholder="Password"
											type="password"
										/>
									</div>
								</div>
								<div
									id="remember-me-button"
									class="custom-control custom-control-alternative custom-checkbox"
								>
									<input
										class="custom-control-input"
										id="remember"
										type="checkbox"
									/>
									<label class="custom-control-label" for="remember">
										<span class="text-default text-md">Remember me</span>
									</label>
								</div>
								<div class="text-center">
									<button
										type="button"
										class="btn btn-default my-4"
										id="login-in-button"
									>
										Login
									</button>
								</div>
								<div class="text-center">
									<button
										type="button"
										class="btn btn-default my-4 d-none"
										id="register-in-button"
									>
										Register
									</button>
								</div>
								<div class="text-center">
									<button
										type="button"
										class="btn btn-default my-4 d-none"
										id="reset-button"
									>
										Reset
									</button>
								</div>
							</form>
						</div>
					</div>
					<div
						id="login-modal-footer"
						class="modal-footer bg-default"
						style="color: #fff;"
					>
						<center class="mr-auto ml-auto">
							Don't have an account?&nbsp;<a
								onclick="makeRegisterAppear()"
								href="#"
								class="text-success"
								>Register</a
							>
							<br /><a
								id="passResetButton"
								onclick="makeResetAppear()"
								href="#"
								class="text-success"
								>Forgot</a
							>
							your password?
						</center>
					</div>
					<div
						id="register-modal-footer"
						class="modal-footer bg-default d-none"
						style="color: #fff;"
					>
						<center class="mr-auto ml-auto">
							Already have an account?&nbsp;<a
								onclick="makeLoginAppear()"
								href="#"
								class="text-success"
								>Login</a
							>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
