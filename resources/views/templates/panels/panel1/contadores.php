       <!-- start here -->
       <?php
        use App\Models\Dedicacio;
        use App\Models\Fase;
        use App\Models\Projecte;
        use App\Models\Tasca;
        use App\Models\Usuari;
    ?>
       <div class="p1-nums-box" id="p1-usuarios" onclick="p1_usuarios()">
            <div class="nums">
                <p><?php echo Usuari::count(); ?></p>
            </div>
            <div class="name">
                <p>Usuarios</p>
            </div>
        </div>
        <div class="p1-nums-box" id="p1-proyecto" onclick="p1_proyecto()">
            <div class="nums">
                <p><?php echo Projecte::count(); ?></p>
            </div>
            <div class="name">
                <p>Proyecto</p>
            </div>
        </div>
        <div class="p1-nums-box" id="p1-tarea" onclick="p1_tarea()">
            <div class="nums">
                <p><?php echo Tasca::count(); ?></p>
            </div>
            <div class="name">
                <p>Tarea</p>
            </div>
        </div>
        <div class="p1-nums-box" id="p1-fase" onclick="p1_fase()">
            <div class="nums">
                <p><?php echo Fase::count(); ?></p>
            </div>
            <div class="name">
                <p>Fase</p>
            </div>
        </div>
        <div class="p1-nums-box" id="p1-dedicacio" onclick="p1_dedicacions()">
            <div class="nums">
                <p><?php echo Dedicacio::count(); ?></p>
            </div>
            <div class="name">
                <p>Dedicacio</p>
            </div>
        </div>
    <!-- End here -->
    <script>

    </script>