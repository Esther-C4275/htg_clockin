<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit" class="logout">
        <img src="/images/logout.png">Logout</button>
</form>

<style>
    .logout {
        text-decoration: none;
        padding: 12px 16px;
        width: 100%;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 18px;
        background: transparent;
        border: none;
        color: #B7B7B7;
        cursor: pointer;
        font-family: 'Inter', sans-serif;
        transition: background 0.3s ease, color 0.3s ease
    }

    .logout:hover {
        background: #fff;
        color: #06414F;
    }
</style>