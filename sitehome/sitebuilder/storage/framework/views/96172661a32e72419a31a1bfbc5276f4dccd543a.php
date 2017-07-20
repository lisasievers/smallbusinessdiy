<!--
    <div class="row">
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <?php if($message = Session::get('success')): ?>
                <div class="custom-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <?php echo $message; ?>

                </div>
                <?php //Session::forget('success');?>
                <?php endif; ?>
                <?php if($message = Session::get('error')): ?>
                <div class="custom-alerts alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <?php echo $message; ?>

                </div>
                <?php //Session::forget('error');?>
                <?php endif; ?>
                <div class="panel-heading">Paywith Stripe</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" id="payment-form" role="form" action="<?php echo e(route('addmoney.stripe')); ?>" >
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(Session::get('email')); ?>" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="site" class="col-md-4 control-label">Site Name </label>
                            <div class="col-md-6">
                                <input id="site" type="hidden" class="form-control" name="site" value="<?php echo e($site_id); ?>" />
                                <input id="sitename" type="text" class="form-control" name="sitename" value="<?php echo e($site_name); ?> " readonly />
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('card_no') ? ' has-error' : ''); ?>">
                            <label for="card_no" class="col-md-4 control-label">Card No</label>
                            <div class="col-md-6">
                                <input id="card_no" type="text" class="form-control" name="card_no" value="<?php echo e(old('card_no')); ?>" autofocus>
                                <?php if($errors->has('card_no')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('card_no')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('ccExpiryMonth') ? ' has-error' : ''); ?>">
                            <label for="ccExpiryMonth" class="col-md-4 control-label">Expiry Month</label>
                            <div class="col-md-6">
                                <input id="ccExpiryMonth" type="text" class="form-control" name="ccExpiryMonth" value="<?php echo e(old('ccExpiryMonth')); ?>" autofocus>
                                <?php if($errors->has('ccExpiryMonth')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('ccExpiryMonth')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('ccExpiryYear') ? ' has-error' : ''); ?>">
                            <label for="ccExpiryYear" class="col-md-4 control-label">Expiry Year</label>
                            <div class="col-md-6">
                                <input id="ccExpiryYear" type="text" class="form-control" name="ccExpiryYear" value="<?php echo e(old('ccExpiryYear')); ?>" autofocus>
                                <?php if($errors->has('ccExpiryYear')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('ccExpiryYear')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                          <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                        <div class="form-group<?php echo e($errors->has('cvvNumber') ? ' has-error' : ''); ?>">
                            <label for="cvvNumber" class="col-md-4 control-label">CVV No.</label>
                            <div class="col-md-6">
                                <input id="cvvNumber" type="text" class="form-control" name="cvvNumber" value="<?php echo e(old('cvvNumber')); ?>" autofocus>
                                <?php if($errors->has('cvvNumber')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('cvvNumber')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('amount') ? ' has-error' : ''); ?>">
                            <label for="amount" class="col-md-4 control-label">Amount</label>
                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" value="<?php echo e($ncost); ?>" autofocus readonly />
                                <?php if($errors->has('amount')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('amount')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Paywith Stripe
                                </button>
                                <a href="<?php echo e(route('site', ['site_id' => $site_id])); ?>" class="btn btn-default">
                                    Back to site
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
   <div class="clear"></div> -->

     <div class="row">
                
                <?php if($message = Session::get('error')): ?>
                <div class="custom-alerts alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <?php echo $message; ?>

                </div>
                <?php Session::forget('error');?>
                <?php endif; ?>
        <div class="col-xs-12 col-md-6 col-md-offset-2">
            <form class="form-horizontal" method="post" id="payment-form" role="form" action="<?php echo e(route('addmoney.stripe')); ?>" >
                        <?php echo e(csrf_field()); ?>

            <input id="email" type="hidden" class="form-control" name="email" value="<?php echo e(Session::get('email')); ?>" />  
            <input id="site" type="hidden" class="form-control" name="site" value="<?php echo e($site_id); ?>" />
            <input id="sitename" type="hidden" class="form-control" name="sitename" value="<?php echo e($site_name); ?> " />
                                      
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <!--<div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Remember
                        </label>
                    </div>-->
                </div>
                <div class="panel-body">
                    
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group<?php echo e($errors->has('card_no') ? ' has-error' : ''); ?>">
                             <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
                             <input id="card_no" type="text" class="form-control" placeholder="Valid Card Number" name="card_no" value="<?php echo e(old('card_no')); ?>" autofocus>
                                <?php if($errors->has('card_no')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('card_no')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-8 col-md-8">
                            <label for="expityMonth">
                                    EXPIRY DATE</label>
                            <div class="form-group">
                                
                                <div class="col-xs-6 col-lg-6 pl-ziro<?php echo e($errors->has('ccExpiryMonth') ? ' has-error' : ''); ?>">
                                    <select id="ccExpiryMonth" class="form-control" name="ccExpiryMonth" autofocus >
                                        <option>Month</option>
                                        <option value="01">Jan (01)</option>
                                        <option value="02">Feb (02)</option>
                                        <option value="03">Mar (03)</option>
                                        <option value="04">Apr (04)</option>
                                        <option value="05">May (05)</option>
                                        <option value="06">June (06)</option>
                                        <option value="07">July (07)</option>
                                        <option value="08">Aug (08)</option>
                                        <option value="09">Sep (09)</option>
                                        <option value="10">Oct (10)</option>
                                        <option value="11">Nov (11)</option>
                                        <option value="12">Dec (12)</option>
                                      </select>
                                      <?php if($errors->has('ccExpiryMonth')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('ccExpiryMonth')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro<?php echo e($errors->has('ccExpiryYear') ? ' has-error' : ''); ?>">
                                    <select id="ccExpiryYear" class="form-control" name="ccExpiryYear" autofocus>
                                            <option value="">Year</option>
                                              <?php
                                                  for($i = 2017; $i < date("Y")+20; $i++){
                                                      echo '<option value="'.$i.'">'.$i.'</option>';
                                                  }
                                            ?>
                                            </select>
                                   <?php if($errors->has('ccExpiryYear')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('ccExpiryYear')); ?></strong>
                                    </span>
                                <?php endif; ?>         
                            </div>
                        </div>
                        </div>
                        <div class="col-xs-4 col-md-4 pull-right">
                            <div class="form-group<?php echo e($errors->has('cvvNumber') ? ' has-error' : ''); ?>">
                                <label for="cvvNumber">
                                    CV CODE</label>
                                <input id="cvvNumber" type="text" class="form-control" name="cvvNumber" value="<?php echo e(old('cvvNumber')); ?>" autofocus>
                                <?php if($errors->has('cvvNumber')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('cvvNumber')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                       <div class="form-group<?php echo e($errors->has('amount') ? ' has-error' : ''); ?>">
                            
                            <div class="col-md-6">
                                <input id="amount" type="hidden" class="form-control" name="amount" value="<?php echo e($ncost); ?>" />
                                <?php if($errors->has('amount')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('amount')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    

                    
                </div>
            </div>
        </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span><?php echo e($ncost); ?></span> Final Payment</a>
                </li>
            </ul>
            <br/>
            <button type="submit" class="btn btn-success btn-lg btn-block">Pay</button>
            </form>
        </div>
    </div>

