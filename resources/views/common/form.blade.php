<form action="form_handler.php" method="post">
    <div class="col">
        <input type="text" name="name" placeholder="Name" pattern="[a-zA-Z\s]+" title="Name" required />
    </div>
    <div class="col">
        <input type="tel" id="phone" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" max="10" title="Phone Number" required />
    </div>
    <div class="col">
        <input type="email" id="email" name="email" placeholder="Email Address" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Email Address" required />
    </div>
    <div class="col">
        <input type="text" name="company" placeholder="Company Name" />
    </div>
    <div class="col select-wrapper">
        <label for="services">Services Looking For:</label>
        <select name="services">
            <option value="services">Services Looking For</option>
            <option value="brand strategy development">Brand Strategy Development</option>
            <option value="brand identity design">Brand Identity Design</option>
            <option value="creative advertising campaigns">Creative Advertising Campaigns</option>
            <option value="digital marketing">Digital Marketing</option>
            <option value="content creation">Content Creation</option>
            <option value="website design and development">Website Design and Development</option>
            <option value="publi crelations">Public Relations</option>
        </select>
    </div>
    <div class="col btn-wrapper d-flex justify-content-center">
        <button type="submit" class="dark-btn">Submit Now</button>
    </div>
</form>
