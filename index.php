
    <?php include 'header.php'; ?>
    <?php include 'mega-menu.php'; ?>
    <?php include 'breadcrumbs-and-h1.php'; ?>
    <div id="primary" class="content-area">
        <div class="container">
            <div class="row">
                <main id="main" class="col-xs-12 col-sm-8 col-md-8" role="main">
                    <article>
                        <div class="entry-header">
                            <h1>Order documents in advance</h1>
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
                                    <li>Insert a valid day</li>
                                    <li>Insert a valid reference number</li>
                                </ul>
                            </div>
                            -->
                            <p>This form allows you to pre-order original documents held by The National Archives to view onsite at Kew. Find out more in <a href="http://www.nationalarchives.gov.uk/about/visit-us/researching-here/accessing-and-copying-documents/" title="">How to view and copy documents</a>.</p>
                            <p>To proceed with your order, you will need to know the following:</p>
                            <div class="emphasis-block">
                                <ul>
                                    <li><b>Your reader’s ticket number</b>. If you don’t have one, <a href="https://secure.nationalarchives.gov.uk/login/yourdetails" title="">apply online for a reader’s ticket</a> - it only takes 15 minutes.</li>
                                    <li><b>Date of visit</b>. Orders for next day delivery must be placed by 16:00. Documents held offsite will need to be ordered three working days in advance.</li>
                                    <li><b>Catalogue reference(s)</b>. You can order up to 12 documents, and have up to 24 active on your ticket at any given time. You search the catalogue and locate references in advance, or search and populate the order fields from this page.</li>
                                </ul>
                            </div>
                            <form action="step-2.php" method="POST" name="orderform" id="orderform" class="form-abandonment">
                                <fieldset>
                                    <legend>Step 1</legend>
                                    <div class="form-row">
                                        <label for="readers_ticket">Reader's ticket number</label>
                                        <p class="form-hint">Enter the number located on the back of your reader’s ticket, or the temporary number issued to you at the end of the reader’s ticket registration process.</p>
                                        <input type="text" id="readers_ticket" name="readers_ticket" class="small" required aria-required="true">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Step 2</legend>
                                    <div class="form-row">
                                        <p class="form-hint">Select the date you plan to visit. Check our <a href="" title="">opening times</a>.</p>
                                        <span id="date-of-visit-day-error" class="form-error form-hint"><span>Select a day</span></span>
                                        <div id="groupErrorPlacement">
                                            <span class="dob-col day">
                                                <label id="day" for="dov_day">Day</label>
                                                <select type="number" aria-labelledby="dov day" id="dov_day" name="dov_day" class="form-warning" aria-describedby="date-of-visit-day-error">
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
                                        <p class="form-hint">Enter your catalogue references into the fields below.</p>
                                        <p class="form-hint">If you need to order more than 12 documents from the same series, you may be able to <a href="http://www.nationalarchives.gov.uk/advanceorders/bulkform.asp" title="">place a bulk order</a>.</p>
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_1">Document 1</label>
                                        <span id="reference-1-error" class="form-error form-hint"><span>Insert a reference number</span></span>
                                        <input type="text" id="reference_1" name="reference_1" class="medium form-warning" required aria-required="true" aria-describedby="reference-1-error">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_2">Document 2 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_2" name="reference_2" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_3">Document 3 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_3" name="reference_3" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_4">Document 4 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_4" name="reference_4" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_5">Document 5 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_5" name="reference_5" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_6">Document 6 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_6" name="reference_6" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_7">Document 7 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_7" name="reference_7" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_8">Document 8 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_8" name="reference_8" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_9">Document 9 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_9" name="reference_9" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_10">Document 10 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_10" name="reference_10" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_11">Document 11 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_11" name="reference_11" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="reference_12">Document 12 <span class="optional">(optional)</span></label>
                                        <input type="text" id="reference_12" name="reference_12" class="medium">
                                    </div>
                                    <div class="form-row">
                                        <label for="requirements">Additional requirements <span class="optional">(optional)</span></label>
                                        <p class="form-hint">Tell us if you have any accessibility requirements or special requests. We cannot guarantee that all documents ordered will be available.</p>
                                        <textarea id="requirements" name="requirements"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <label for="seat-number">Table number <span class="optional">(optional)</span></label>
                                        <p class="form-hint">If you would like to specify a particular table, please look at the <a href="http://www.nationalarchives.gov.uk/documents/document-reading-room.pdf" title="">floor plan</a> (PDF, 526kb) and enter the table number here.</p>
                                        <input type="text" id="seat_number" name="seat_number" class="small">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Step 4</legend>
                                    <div class="form-row">
                                        <label for="full_name">Full name</label>
                                        <input type="text" id="full_name" name="full_name" required aria-required="true">
                                    </div>
                                    <div class="form-row">
                                        <label for="tel">Telephone (include area code)</label>
                                        <input type="text" id="tel" name="tel" required aria-required="true">
                                    </div>
                                    <div class="form-row">
                                        <label for="email_address">Email <span class="optional">(optional)</span></label>
                                        <p class="form-hint">Enter email address to receive a copy of your order.</p>
                                        <input type="email" id="email" name="email">
                                    </div>
                                </fieldset>
                                <div class="form-row checkbox">
                                    <span id="privacy-policy-error" class="form-error form-hint"><span>Please agree to our privacy policy</span></span>
                                    <input class="form-warning" type="checkbox" id="privacy_policy" name="privacy_policy" value="Yes" required aria-required="true" aria-describedby="privacy-policy-error">
                                    <label for="privacy_policy">I have read and agree to The National Archives' <a href="http://www.nationalarchives.gov.uk/legal/privacy.htm" title="Opens in a new window" target="_blank">privacy statement </a></label>
                                </div>
                                <div class="form-row submit"><input type="submit" name="submit-rre" id="submit-tna-form" value="Continue"></div>
                            </form>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
