</div>
</div>
</div>
<script src="owne/vendor/vendor/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="owne/vendor/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="owne/vendor/vendor/bootstrap/js/bootstrap.min.js"></script>
<script>
    // script.js

document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('dark-mode-toggle');
    const currentMode = localStorage.getItem('darkMode');

    // Apply the saved mode from localStorage
    if (currentMode === 'enabled') {
        document.body.classList.add('dark-mode');
    }

    // Toggle mode and save preference
    toggleButton.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        const mode = document.body.classList.contains('dark-mode') ? 'enabled' : 'disabled';
        localStorage.setItem('darkMode', mode);
    });
});
function myFunction(){
        var e =document.body;
        e.dataset.bsTheme=e.dataset.bsTheme == "light" ? "dark" :"light";
    }




</script>

{{-- <script src="app.js"></script> --}}

</body>
</html>
