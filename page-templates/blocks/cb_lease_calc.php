<?php
$classes = $classes['className'] ?? 'py-5';
?>
<section class="lease_calc <?=$classes?>">
    <div class="container-xl">
        <h2>Lease Extension Calculator</h2>
        <div class="row">
            <div class="col-lg-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, aspernatur ullam officiis reprehenderit voluptates vitae esse dicta distinctio sunt recusandae?
            </div>
            <div class="col-lg-6">
                <div class="row g-4 mb-4">
                    <div class="col-lg-5">
                        <label class="fw-bold" for="term">Years left on lease</label>
                    </div>
                    <div class="col-lg-7">
                        <div class="term_inner">
                            <div class="text-center" id="rangeval">70</div>
                            <input type="range" id="term" class="form-range" min=5 max=125 value="70" name="term" onInput="document.getElementById('rangeval').innerText = document.getElementById('term').value">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <label class="fw-bold" for="rent">Ground Rent <small>(average)</small></label>
                    </div>
                    <div class="col-lg-7 d-flex align-items-center">
                        &pound;&nbsp;<input type="number" class="form-control w-75 me-1" name="rent" id="rent" min="0" value="75" style="width: auto;">
                        <small style="display:inline-block;white-space:nowrap;">per annum</small>
                    </div>
                    <div class="col-lg-5">
                        <label class="fw-bold" for="rent">Property Value <small>(if extended)</small></label>
                    </div>
                    <div class="col-lg-7 d-flex align-items-center">
                        &pound;&nbsp;<input type="number" class="form-control" name="value" id="value" min=0 value=595000>
                    </div>
                </div>
                <div class="text-center mb-4">
                    <button class="btn btn-primary" id="calc">Calculate the Cost</button>
                </div>
                <div class="py-2 text-center fs-4" id="total"></div>
            </div>
        </div>
    </div>
</section>
<script>

function calculateTotal() {
    var rent = parseFloat(document.getElementById('rent').value);
    var term = parseInt(document.getElementById('term').value);
    var value = parseFloat(document.getElementById('value').value);

    var additionalValue;
    if (term <= 80) {
        additionalValue = value * 0.1;
    } else if (term <= 90) {
        additionalValue = value * 0.2;
    } else {
        additionalValue = value * 0.3;
    }

    var total = (rent * term) + additionalValue;

    document.getElementById('total').innerText = 'Expected Premium: £' + Math.round(total).toLocaleString();
}

document.addEventListener('DOMContentLoaded', calculateTotal);
document.getElementById('calc').addEventListener('click', calculateTotal);

</script>