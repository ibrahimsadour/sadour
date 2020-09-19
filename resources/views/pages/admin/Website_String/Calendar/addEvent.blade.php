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
                <label><input type="checkbox" name="allDay" value="1"  checked/> All Day</label><br>
                <label><input type="checkbox" name="allDay" value="0"/> Partial</label>
            </div>

            <!-- <div class="form-group">
                    <label> Background Color </label>
                <input type="color" name="color" class="form-control" />
            </div> -->

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
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
