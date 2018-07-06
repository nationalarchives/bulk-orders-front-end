
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
                        </div><!-- end entry-header -->
                        <div class="entry-content clearfix">
                            <div class="arrow-steps clearfix"">
                                <ul>
                                    <li><span>1</span> Place order</li>
                                    <li class="current"><span>2</span> Check order</li>
                                    <li><span>3</span> Order complete</li>
                                </ul>
                            </div><!-- end arrow-steps -->
                            <h2>Check your order</h2>
                            <p>Review your order and click 'Complete order' to confirm, or 'Back' to make an amend.</p>
                            <div class="emphasis-block">
                                <ul class="no-bullet">
                                    <li><b>Name</b>: Joe Bloggs</li>
                                    <li><b>Email address</b>: joe@bloggs.com</li>
                                    <li><b>Telephone</b>: 07898 989898</li>
                                    <li><b>Date of visit</b>: 27 Jan 2018</li>
                                </ul>
                            </div><!-- end emphasis-block -->
                            <form action="step-3.php" method="POST" id="bulk-order-form-confirm" name="bulk-order-form-confirm">
                                <ol class="two-tier-list">
                                    <li><span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                    <li><span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                    <li><span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                    <li><span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                    <li><span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                    <li><span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                    <li><span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                    <li><span>ADM 1/1: Admiralty, and Ministry of Defence, Navy Department: Correspondence and Papers</span></li>
                                </ol>
                                <div class="form-row submit">
                                    <a href="index.php" title="continue" class="back">&lt; Back</a>
                                    <input type="submit" name="submit-advance-order" id="submit-advance-order" class="positioned" value="Complete order">
                                </div><!-- end form-row -->
                            </form>
                        </div><!-- end entry-content -->
                    </article>
                </main>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end primary -->
    <?php include 'footer.php'; ?>
