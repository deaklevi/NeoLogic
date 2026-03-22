<div style="background: #0f0f0f; color: #ffffff; padding: 30px; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; max-width: 650px; margin: auto; border: 1px solid #F3A122; border-radius: 8px;">
    
    <div style="border-bottom: 1px solid #333; margin-bottom: 25px; padding-bottom: 15px;">
        <h2 style="color: #F3A122; margin: 0; font-size: 20px; text-transform: uppercase; letter-spacing: 2px;">
            ⚠️ Új Lead Érkezett!
        </h2>
        <p style="color: #888; font-size: 13px; margin: 5px 0 0 0;">Forrás: Weboldal Kapcsolati Ürlap</p>
    </div>

    <div style="background: #1a1a1a; border-radius: 6px; overflow: hidden; margin-bottom: 25px;">
        <table style="width: 100%; border-collapse: collapse; font-size: 15px;">
            <tr>
                <td style="padding: 12px 15px; border-bottom: 1px solid #222; color: #F3A122; width: 30%; font-weight: bold;">Ügyfél neve:</td>
                <td style="padding: 12px 15px; border-bottom: 1px solid #222; color: #fff;">{{ $formData['name'] }}</td>
            </tr>
            <tr>
                <td style="padding: 12px 15px; border-bottom: 1px solid #222; color: #F3A122; font-weight: bold;">E-mail cím:</td>
                <td style="padding: 12px 15px; border-bottom: 1px solid #222;">
                    <a href="mailto:{{ $formData['email'] }}" style="color: #fff; text-decoration: underline;">{{ $formData['email'] }}</a>
                </td>
            </tr>
            <tr>
                <td style="padding: 12px 15px; border-bottom: 1px solid #222; color: #F3A122; font-weight: bold;">Cég / Szervezet:</td>
                <td style="padding: 12px 15px; border-bottom: 1px solid #222; color: #fff;">{{ $formData['company'] ?? 'Nincs megadva' }}</td>
            </tr>
            <tr>
                <td style="padding: 12px 15px; color: #F3A122; font-weight: bold;">Időpont:</td>
                <td style="padding: 12px 15px; color: #888;">{{ now()->format('Y-m-d H:i') }}</td>
            </tr>
        </table>
    </div>

    <div style="margin-bottom: 30px;">
        <p style="color: #F3A122; font-weight: bold; font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">Üzenet tartalma:</p>
        <div style="background: #222; padding: 20px; border-radius: 6px; border-left: 4px solid #F3A122; line-height: 1.6; color: #ddd; font-style: italic;">
            "{{ $formData['message'] }}"
        </div>
    </div>

    <div style="text-align: center;">
        <a href="mailto:{{ $formData['email'] }}?subject=Re: NeoLogic megkeresés" style="display: inline-block; background: #F3A122; color: #000; padding: 12px 25px; text-decoration: none; font-weight: bold; border-radius: 4px; font-size: 14px;">
            Válasz küldése azonnal
        </a>
    </div>

    <div style="margin-top: 30px; text-align: center; border-top: 1px solid #222; padding-top: 15px;">
        <small style="color: #444;">NeoLogic Belső Értesítő Rendszer</small>
    </div>
</div>