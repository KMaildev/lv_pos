<style>
    .mybutton {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Enter Number of Guests
                </h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="col-md-12">
                        <center>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <a href="{{ route('index_waiter_menu', ['guest_number' => '1']) }}" class="mybutton"
                                    for="btnradio1">
                                    1
                                </a>

                                <a href="{{ route('index_waiter_menu', ['guest_number' => '2']) }}" class="mybutton"
                                    for="btnradio2">
                                    2
                                </a>

                                <a href="{{ route('index_waiter_menu', ['guest_number' => '3']) }}" class="mybutton"
                                    for="btnradio3">
                                    3
                                </a>


                                <a href="{{ route('index_waiter_menu', ['guest_number' => '4']) }}" class="mybutton"
                                    for="btnradio4">
                                    4
                                </a>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

                                <a href="{{ route('index_waiter_menu', ['guest_number' => '5']) }}" class="mybutton"
                                    for="btnradio5">
                                    5
                                </a>

                                <a href="{{ route('index_waiter_menu', ['guest_number' => '6']) }}" class="mybutton"
                                    for="btnradio6">
                                    6
                                </a>

                                <a href="{{ route('index_waiter_menu', ['guest_number' => '7']) }}" class="mybutton"
                                    for="btnradio7">
                                    7
                                </a>

                                <a href="{{ route('index_waiter_menu', ['guest_number' => '8']) }}" class="mybutton"
                                    for="btnradio8">
                                    8
                                </a>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function enterGuestsNumber(number) {}
</script>
