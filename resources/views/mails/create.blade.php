<section>
    <h1>Stwórz nowego maila</h1>
    <form method="POST" action="{{ route('mail.store') }}">
        @csrf
        <label for="qr_code_value">Wartość QR code</label>
        <br>
        <input type="text" name="qr_code_value" required>
        <br>
        <br>
        <button type="submit">
            Zapisz
        </button>
    </form>
</section>

