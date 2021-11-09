

<div class="sidebar">

    <ul class="list-group" style="padding-top:0%;">

        <div class="row">
            <div class="col-md-2">
                <div class="card card-success" style="height:10em;background-color:green">
                    <p style="color:white">No of Received Entry in the last 24 hours</p>
                    <p style="color:white;text-align:center;font-weight:bold">{{count($log_24)}}</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card card-success" style="height:10em;background-color:red">
                    <p style="color:white">No of Received Entry in the last 1 hours</p>
                    <p style="color:white;text-align:center;font-weight:bold">{{count($log_1)}}</p>
                </div>
            </div>
           
            
        </div>
    

    </ul>
</div>
