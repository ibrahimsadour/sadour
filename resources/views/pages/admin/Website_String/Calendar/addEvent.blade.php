<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.css" />
<script src="{{asset('js/datetimepicker.full.js')}}" ></script>

<!-- Form ( 1 ) to add event -->
<div id="dialog" style = "display:none;" >
    <div id="dialog-body">
        <form id="dayclick" method="POST" action="{{route('calendar.store')}}">
            @csrf
            <div class="form-group">
                <label> Event Title </label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Event Title" required />
            </div>

            <div class="form-group">
                <label> Start Date/Time </label>
                <input type="text" name="start" id="start"class="form-control" placeholder="Start Date & Time" required/>
            </div>

            <div class="form-group">
                    <label> End Date/Time </label>
                <input type="text" name="end" id="end" class="form-control" placeholder="End Date & Time" required/>
            </div>

            <div class="form-group">
                <label><input type="checkbox" name="allDay" value="1"  /> All Day</label><br>
                <label><input type="checkbox" name="allDay" value="0" checked/> Partial</label>
            </div>

            <div class="form-group">
                    <label> Background Color </label>
                <input type="color" name="backgroundColor" class="form-control" />
            </div>

            <div class="form-group">
                    <label> Text Color </label>
                <input type="color" name="textColor"  id="textColor" class="form-control" />
            </div>

            <input type="hidden" id="eventId" name="eventId">
            <div class="form-group">
                <button type="submit" class="btn btn-primary"  id="update"> Add Event</button>
            </div>
        </form>
    </div>
</div>

<!-- Form ( 2 ) to add coustmize event -->
<div id="dialog2" style = "display:none;" >
    <div id="dialog-body">
        <form id="dayclick" method="POST" action="{{route('calendar.store')}}">
            @csrf
            <div class="form-group">
                <label> Event Title </label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Event Title" required />
            </div>

            <div class="form-group">
                <label> Start Date/Time </label>
                <input type="text" name="start" id="datetimepicker"class="form-control" placeholder="Start Date & Time" required/>
            </div>

            <div class="form-group">
                    <label> End Date/Time </label>
                <input type="text" name="end" id="datetimepicker2" class="form-control" placeholder="End Date & Time" required/>
            </div>

            <div class="form-group">
                <label><input type="checkbox" name="allDay" value="1"  /> All Day</label><br>
                <label><input type="checkbox" name="allDay" value="0" checked/> Partial</label>
            </div>

            <div class="form-group">
                    <label> Background Color </label>
                <input type="color" name="backgroundColor" class="form-control" />
            </div>

            <div class="form-group">
                    <label> Text Color </label>
                <input type="color" name="textColor"  id="textColor" class="form-control" />
            </div>

            <input type="hidden" id="eventId" name="eventId">
            <div class="form-group">
                <button type="submit" class="btn btn-primary"  id="update"> Add Event</button>
            </div>
        </form>
    </div>
</div>



  <script type="text/javascript">

    $(document).ready(function() {

        var myFormatter = {
            parseDate: function(vDate, vFormat) {
            return moment(vDate, vFormat).toDate();
            },
            guessDate: function(vDateStr, vFormat) {
            return moment(vDateStr, vFormat).toDate();
            },
            parseFormat: function(vChar, vDate) {
            return vDate; // date string (I guess)

            },
            formatDate: function(vChar, vDate) {
            var res = moment(vChar).format(vDate);
            return res;
            },

        };

      jQuery.datetimepicker.setDateFormatter(myFormatter);

        jQuery('#datetimepicker').datetimepicker({
            
            timepicker: true,
            yearStart: new Date().getFullYear(),
            yearEnd: new Date().getFullYear() + 1,
            value: new Date(),
            defaultDate: new Date(),
            /*
            -- datetimepicker default formating - when PHP date formatter is used --
            format: "d/m/Y H:i:s",
            formatTime: "H:i",
            formatDate: "d/m/Y",
            */

            format: "YYYY-MM-DD H:mm:ss",
            formatTime: 'H:mm',
            formatDate: 'YYYY-MM-DD', //I need to use this format, but it works only when using "d/m/Y" - so somewhere the php date formater is still used..
            highlightedDates:  "{{route('allEvent')}}"
           
        });

        jQuery('#datetimepicker2').datetimepicker({
            timepicker: true,
            yearStart: new Date().getFullYear(),
            yearEnd: new Date().getFullYear() + 1,
            value: new Date(),
            defaultDate: new Date(),
            /*
            -- datetimepicker default formating - when PHP date formatter is used --
            format: "d/m/Y H:i:s",
            formatTime: "H:i",
            formatDate: "d/m/Y",
            */

            format: "YYYY-MM-DD H:mm:ss",
            formatTime: 'H:mm',
            formatDate: 'DD-MM-YYYY' //I need to use this format, but it works only when using "d/m/Y" - so somewhere the php date formater is still used..

        });

    });

  </script>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
