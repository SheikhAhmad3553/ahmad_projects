<div id="pricing-tab" class="tab-pane fade in">
    <div class="block-title visible-xs">
        <h3 class="title">Pricing</h3>    
    </div>
    <div class="block-body">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <label>Booking</label>
            </div>
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="control control--checkbox radio-tab">Allow instant booking for this place.
                        <input type="checkbox" name="friday">
                        <span class="control__indicator"></span>
                        <span class="radio-tab-inner"></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="night-price">Daily</label>
                    <input type="text" name="night_price" class="form-control" id="night-price" placeholder="Enter price for 1 night">
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="weekends">Weekends</label>
                    <input type="text" name="weekends" class="form-control" id="weekends" placeholder="Enter price for 1 weekend">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <label>Select the days to apply weekend pricing</label>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="form-group">
                    <label class="control control--checkbox radio-tab">Friday
                        <input type="checkbox" name="friday" checked="checked">
                        <span class="control__indicator"></span>
                        <span class="radio-tab-inner"></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="form-group">
                    <label class="control control--checkbox radio-tab">Saturday
                        <input type="checkbox" name="saturday">
                        <span class="control__indicator"></span>
                        <span class="radio-tab-inner"></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="form-group">
                    <label class="control control--checkbox radio-tab">Sunday
                        <input type="checkbox" name="sunday">
                        <span class="control__indicator"></span>
                        <span class="radio-tab-inner"></span>
                    </label>
                </div>
            </div>
        </div>
        <hr class="row-separator">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <h3 class="sub-title">Long-term Pricing</h3>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="priceWeek">Weekly <span class="text-normal">- 7 Days</span></label>
                    <input type="text" name="priceWeek" class="form-control" id="priceWeek" placeholder="Enter price for 1 week">
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="priceMonthly">Monthly - <span class="text-normal">30 Days</span></label>
                    <input type="text" name="priceMonthly" class="form-control" id="priceMonthly" placeholder="Enter price for 1 week">
                </div>
            </div>
        </div>
        <hr class="row-separator">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <h3 class="sub-title">Additional Costs</h3>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="additionalGuests">Security Deposit</label>
                    <input type="text" name="additionalGuests" class="form-control" id="additionalGuests" placeholder="Enter price for 1 addigional guest">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <label>Cleaning Fee</label>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <input type="text" name="additionalGuests" class="form-control" placeholder="Enter price for cleaning fee">
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="form-group">
                    <label class="control control--radio radio-tab">
                        <input type="radio" name="fee-type" value="1" checked="checked">
                        <span class="control-text">Daily</span>
                        <span class="control__indicator"></span>
                        <span class="radio-tab-inner"></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="form-group">
                    <label class="control control--radio radio-tab">
                        <input type="radio" name="fee-type" value="2" checked="checked">
                        <span class="control-text">Per stay</span>
                        <span class="control__indicator"></span>
                        <span class="radio-tab-inner"></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    <label for="securityDeposit">Security Deposit</label>
                    <input type="text" name="securityDeposit" class="form-control" id="securityDeposit" placeholder="Enter price for security deposit">
                </div>
            </div>
        </div>

        <hr class="row-separator">
        <!-- Custom Period Prices -->

        <h3 class="sub-title">Setup Custom Period Prices</h3>
        <div class="custom-prices-dates">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Start Date</label>
                    <input type="text" class="form-control" placeholder="Enter here">
                </div>
            </div>
                <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>End Date</label>
                    <input type="text" class="form-control" placeholder="Enter here">
                </div>
            </div>
            </div>
        </div>
        <div class="row">    
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Daily</label>
                    <input type="text" class="form-control" placeholder="Enter price for 1 night">
                </div>
            </div>
            
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Weekends</label>
                    <input type="text" class="form-control" placeholder="Enter the unit price for a single day">
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <label>Select the days to apply weekend pricing</label>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="form-group">
                    <label class="control control--checkbox radio-tab">Friday
                        <input type="checkbox" name="friday" checked="checked">
                        <span class="control__indicator"></span>
                        <span class="radio-tab-inner"></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="form-group">
                    <label class="control control--checkbox radio-tab">Saturday
                        <input type="checkbox" name="saturday">
                        <span class="control__indicator"></span>
                        <span class="radio-tab-inner"></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="form-group">
                    <label class="control control--checkbox radio-tab">Sunday
                        <input type="checkbox" name="sunday">
                        <span class="control__indicator"></span>
                        <span class="radio-tab-inner"></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <button type="button" class="btn btn-primary mt-20">Save</button>
            </div>
        </div>

        <hr class="row-separator">

        <h3 class="sub-title">Custom Period Prices</h3>
        <div class="table-block dashboard-reservation-table dashboard-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Daily</th>
                        <th>Weekends</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Start Date">
                            <time datetime="2017-05-15T19:00">May 15, 2017</time>
                        </td>
                        <td data-label="End Date">
                            <time datetime="2017-05-15T19:00">May 15, 2017</time>
                        </td>
                        <td data-label="Daily">
                            <strong>$576</strong>
                        </td>
                        <td data-label="Weekends">
                            <strong>$576</strong>
                        </td>
                        <td data-label="Actions">
                            <div class="custom-actions">
                                <button class="btn btn-primary">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Start Date">
                            <time datetime="2017-05-15T19:00">May 15, 2017</time>
                        </td>
                        <td data-label="End Date">
                            <time datetime="2017-05-15T19:00">May 15, 2017</time>
                        </td>
                        <td data-label="Daily">
                            <strong>$576</strong>
                        </td>
                        <td data-label="Weekends">
                            <strong>$576</strong>
                        </td>
                        <td data-label="Actions">
                            <div class="custom-actions">
                                <button class="btn btn-primary">Delete</button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div><!-- pricing-tab -->



