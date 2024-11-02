<?php require("./views/partials/header.php")  ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Make a Donation</h3>
                    <form id="donationForm">
                        <div class="mb-3">
                            <label for="donor_name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="donor_name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="donor_email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="donor_email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Donation Amount ($)</label>
                            <input type="number" class="form-control" id="amount" placeholder="Enter amount" step="0.01" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message (optional)</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Add a message"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="paymentMethod" class="form-label">Payment Method</label>
                            <select class="form-select" id="paymentMethod" required>
                                <option value="" disabled selected>Select payment method</option>
                                <option value="credit_card">Credit Card</option>
                                <option value="paypal">PayPal</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Donate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("./views/partials/footer.php")  ?>