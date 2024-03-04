<div>
    <a class="dropdown-item" href="#" onclick="
    event.preventDefault();
    document.getElementById('btn-logout').click();">
    <i class="lni lni-exit"></i> Logout
    </a>
    <form id="logout-form" wire:submit='logout' class="d-none">
    @csrf
    <button id="btn-logout" type="submit" class="d-none"></button>
    </form>
</div>
