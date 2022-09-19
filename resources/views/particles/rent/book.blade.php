
<form method="post" action="{{ route('verhuur.calender.post') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Naam *</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone">Telefoon-nummer</label>
        <input type="phone" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label for="club">Vereniging/organisatie *</label>
        <input type="string" class="form-control" name="organisation">
    </div>
    <div class="form-group">
        <label for="club">Aantal personen*</label>
        <input type="string" class="form-control" name="amount_persons">
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="club">Startdatum verhuur*</label>
                <input class="form-control" id="date" name="start_date" placeholder="MM/DD/YYY" type="text"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="club">Einddatum verhuur*</label>
                <input class="form-control" id="date" name="end_date" placeholder="MM/DD/YYY" type="text"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="comment">Opmerking</label>
        <textarea class="form-control" name="comment"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="book_form" value="Verstuur" class="btn btn-info"/><br />
    </div>
</form>