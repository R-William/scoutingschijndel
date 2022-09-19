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
        <label for="club">Vereniging/organisatie</label>
        <input type="string" class="form-control" name="organisation">
    </div>
    <div class="form-group">
        <label for="comment">Opmerking</label>
        <textarea class="form-control" name="comment"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="contact_form" value="Verstuur" class="btn btn-info"/><br />
    </div>
</form>