<div style="background: #111; color: #fff; padding: 20px; font-family: sans-serif;">
    <h2 style="color: #F3A122;">Új üzenet érkezett!</h2>
    <p><strong>Név:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Cég:</strong> {{ $formData['company'] ?? 'Nincs' }}</p>
    <p><strong>Üzenet:</strong></p>
    <p style="background: #222; padding: 10px; border-left: 4px solid #F3A122;">{{ $formData['message'] }}</p>
</div>