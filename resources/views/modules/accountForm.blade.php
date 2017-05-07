                   
                  <div class="form-group label-floating{{ $errors->has('stud_num') ? ' has-error' : '' }}">
                      <label for="teramail" class="control-label">Student Number</label>
                      <input type="text" id="studNum" name="studNum" value="" placeholder="" class="form-control" value="{{ old('studNum') }}" /> 
                      
                  </div>                                      
                  <div class="form-group label-floating{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="control-label">
                        Password
                    </label>
                      <input type="password" id="password" name="password" placeholder="" class="form-control" />
                      
                  </div>                            
                  <div class="form-group">

                        <span class="checkbox l-checkbox">
                          <label class="login-check">
                            <input type="checkbox" name="remember"> Remember Me
                          </label>
                        </span>

                  </div>
                  <div class="form-group form-horizontal">

                        <button type="submit" name="login" class="btn btn-raised btn-primary teams-btn"> Login </button>

                        <span class="text-right"> <a href="{{ url('/password/reset') }}" class="btn btn-link"> Forgot password? </a> </span>
                        <span class="text-right flot-right"> <a href="{{ url('/password/register') }}" class="btn btn-link"> Sign up </a> </span>

                  </div>
