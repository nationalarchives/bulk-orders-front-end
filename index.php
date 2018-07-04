
    <?php include 'header.php'; ?>
    <?php include 'mega-menu.php'; ?>
    <?php include 'breadcrumbs-and-h1.php'; ?>
    <div id="primary" class="content-area">
        <div class="container">
            <div class="row">
                <main id="main" class="col-xs-12 col-sm-8 col-md-8" role="main">
                    <article>
                        <div class="entry-header">
                            <h1>Bulk-order documents in advance</h1>
                        </div>
                        <div class="entry-content clearfix">
                            <div class="arrow-steps clearfix"">
                                <ul>
                                    <li class="current"><span>1</span> Place order</li>
                                    <li><span>2</span> Check order</li>
                                    <li><span>3</span> Order complete</li>
                                </ul>
                            </div>
                            <h2>Place an order</h2>
                            <!-- <div class="emphasis-block error-message" role="alert"><h2>There was a problem:</h2>
                                <ul>
                                    <li>Insert valid reference numbers</li>
                                </ul>
                            </div> -->
                            <p>This form allows you to pre-order 20-40 original documents from the <b>same series</b> held by The National Archives to view on site at Kew.</p>
                            <p>You can use a <a href="https://www.nationalarchives.gov.uk/order-documents-in-advance/" title="">different form</a> to order up to 12 documents in advance from different series.</p>
                            <p>To proceed with your order, you will need the following:</p>
                            <div class="emphasis-block">
                                <ul>
                                    <li><b>Your reader’s ticket number</b>. If you don’t have one, <a href="https://secure.nationalarchives.gov.uk/login/yourdetails" title="">apply online for a reader’s ticket</a> - it should take 15 minutes.</li>
                                    <li><b>Date of visit</b>. You can bulk-order documents a minimum of three days before your visit. You cannot place bulk orders more than six weeks before your visit.</li>
                                    <li><b>Catalogue reference(s)</b>. You can order a minimum of 20 documents up to a maximum of 40 documents.</li>
                                </ul>
                            </div>

                            <h3>Please note</h3>
                            <p>We are unable to produce the following document series in bulk due to their size:</p>
                            <div class="emphasis-block">
                                <p>BT 42, BT 43, BT 50, BT 52, PROB 4, C 13, C 14, E 112, KB 122</p>
                            </div>
                            <p>We will notify you if any of the documents you want to order are unavailable.</p>
                            <p>If the documents you want to order are large, you may not be able to view all of them at the same time.</p>

                            <form action="step-2.php" method="POST" name="bulk-order-form" id="bulk-order-form" class="form-abandonment">
                                <fieldset>
                                    <legend>Step 1</legend>
                                    <div class="form-row">
                                        <label for="readers_ticket">Reader's ticket number</label>
                                        <p class="form-hint">Enter the number located on the back of your reader’s ticket, or the temporary number issued to you at the end of the reader’s ticket registration process.</p>
                                        <input type="text" id="readers_ticket" name="readers_ticket" class="small">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Step 2</legend>
                                    <div class="form-row">
                                        <p class="form-hint">Select the date you plan to visit. Check our <a href="" title="">opening times</a>.</p>
                                        <span id="date-of-visit-day" class="form-hint"><span>Select a day</span></span>
                                        <div id="groupErrorPlacement">
                                            <span class="dob-col day">
                                                <label id="day" for="dov_day">Day</label>
                                                <select type="number" aria-labelledby="dov day" id="dov_day" name="dov_day" aria-describedby="date-of-visit-day">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                    <option>15</option>
                                                    <option>16</option>
                                                    <option>17</option>
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                </select>
                                            </span>
                                            <span class="dob-col month">
                                                <label id="month" for="dov_month">Month</label>
                                                <select type="number" aria-labelledby="dov month" id="dov_month" name="dov_month">
                                                    <option>Jan</option>
                                                    <option>Feb</option>
                                                    <option>Mar</option>
                                                    <option>Apr</option>
                                                    <option>May</option>
                                                    <option>Jun</option>
                                                    <option>Jul</option>
                                                    <option>Aug</option>
                                                    <option>Sep</option>
                                                    <option>Oct</option>
                                                    <option>Nov</option>
                                                    <option>Dec</option>
                                                </select>
                                            </span>
                                            <span class="dob-col year">
                                                <label id="year" for="dov_year">Year</label>
                                                <select type="number" aria-labelledby="dov year" id="dov_year" name="dov_year">
                                                    <option>2018</option>
                                                    <option>2019</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Step 3</legend>
                                    <div class="form-row">
                                        <label for="series_number">Department and series number</label>
                                        <p class="form-hint">Provide the department and series number of the documents you wish to order, for example FO 608.</p>
                                        <input type="text" id="series_number" name="series_number" class="medium">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Step 4</legend>
                                    <div class="form-row">
                                        <p class="form-hint">Enter the <b>full catalogue references</b>, for example FO 608/88/3.</p>
                                        <p class="form-hint">The minimum number of documents you can bulk order is 20.</p>
                                    </div>
                                    <div class="container" id="form-fields">
                                        <div class="col-md-6">
                                            <div class="form-row">
                                                <label for="reference_1">1</label>
                                                <input type="text" class="form-warning" id="reference_1" name="reference_1" aria-describedby="reference-1">
                                                <span id="reference-1-error" class="form-error form-hint"><span>Insert a reference number</span></span>
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_2">2</label>
                                                <input type="text" id="reference_2" name="reference_2" aria-describedby="reference-2">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_3">3</label>
                                                <input type="text" id="reference_3" aria-describedby="reference-3">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_4">4</label>
                                                <input type="text" id="reference_4" name="reference_4">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_5">5</label>
                                                <input type="text" id="reference_5" name="reference_5">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_6">6</label>
                                                <input type="text" id="reference_6" name="reference_6">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_7">7</label>
                                                <input type="text" id="reference_7" name="reference_7">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_8">8</label>
                                                <input type="text" id="reference_8" name="reference_8">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_9">9</label>
                                                <input type="text" id="reference_9" name="reference_9">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_10">10</label>
                                                <input type="text" id="reference_10" name="reference_10">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_11">11</label>
                                                <input type="text" id="reference_11" name="reference_11">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_12">12</label>
                                                <input type="text" id="reference_12" name="reference_12">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_13">13</label>
                                                <input type="text" id="reference_13" name="reference_13">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_14">14</label>
                                                <input type="text" id="reference_14" name="reference_14">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_15">15</label>
                                                <input type="text" id="reference_15" name="reference_15">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_16">16</label>
                                                <input type="text" id="reference_16" name="reference_16">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_17">17</label>
                                                <input type="text" id="reference_17" name="reference_17">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_18">18</label>
                                                <input type="text" id="reference_18" name="reference_18">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_19">19</label>
                                                <input type="text" id="reference_19" name="reference_19">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_20">20</label>
                                                <input type="text" id="reference_20" name="reference_20">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-row">
                                                <label for="reference_21">21</label>
                                                <input type="text" id="reference_21" name="reference_21">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_22">22</label>
                                                <input type="text" id="reference_22" name="reference_22">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_23">23</label>
                                                <input type="text" id="reference_23" name="reference_23">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_24">24</label>
                                                <input type="text" id="reference_24" name="reference_24">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_25">25</label>
                                                <input type="text" id="reference_25" name="reference_25">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_26">26</label>
                                                <input type="text" id="reference_26" name="reference_26">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_27">27</label>
                                                <input type="text" id="reference_27" name="reference_27">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_28">28</label>
                                                <input type="text" id="reference_28" name="reference_28">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_29">29</label>
                                                <input type="text" id="reference_29" name="reference_29">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_30">30</label>
                                                <input type="text" id="reference_30" name="reference_30">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_31">31</label>
                                                <input type="text" id="reference_31" name="reference_31">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_32">32</label>
                                                <input type="text" id="reference_32" name="reference_32">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_33">33</label>
                                                <input type="text" id="reference_33" name="reference_33">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_34">34</label>
                                                <input type="text" id="reference_34" name="reference_34">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_35">35</label>
                                                <input type="text" id="reference_35" name="reference_35">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_36">36</label>
                                                <input type="text" id="reference_36" name="reference_36">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_37">37</label>
                                                <input type="text" id="reference_37" name="reference_37">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_38">38</label>
                                                <input type="text" id="reference_38" name="reference_38">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_39">39</label>
                                                <input type="text" id="reference_39" name="reference_39">
                                            </div>
                                            <div class="form-row">
                                                <label for="reference_40">40</label>
                                                <input type="text" id="reference_40" name="reference_40">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row show" id="additional-requirements">
                                        <label for="requirements">Additional requirements <span class="optional">(optional)</span></label>
                                        <p class="form-hint">Tell us if you have any accessibility requirements or special requests. We cannot guarantee that all documents ordered will be available.</p>
                                        <textarea id="requirements" name="requirements"></textarea>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Step 5</legend>
                                    <div class="form-row">
                                        <label for="full_name">Full name</label>
                                        <input type="text" id="full_name" name="full_name">
                                    </div>
                                    <div class="form-row">
                                        <label for="tel">Telephone (include area code)</label>
                                        <input type="text" id="tel" name="tel">
                                    </div>
                                    <div class="form-row">
                                        <label for="email_address">Email</label>
                                        <p class="form-hint">Enter email address to receive a copy of your order.</p>
                                        <input type="email" id="email" name="email">
                                    </div>
                                </fieldset>
                                <p>The National Archives takes your privacy seriously and we are committed to the responsible handling of personal information in accordance with our Information Charter. See our <a href="https://www.nationalarchives.gov.uk/legal/privacy.htm">privacy policy</a> for more details.</p>
                                <div class="form-row submit"><input type="submit" name="submit-rre" id="submit-tna-form" value="Continue"></div>
                            </form>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
