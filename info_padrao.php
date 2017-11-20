<h2>rasp_levins Status</h2>


<p><b>Tempo Ligado:</b><br>
    <?php echo shell_exec('uptime -p');?></p>

<p><b>Último boot:</b><br>
    <?php echo shell_exec('uptime -s');?></p>

<p><b>Temperatura:</b><br>
    <?php
    $temperatura = intval(shell_exec('cat /sys/class/thermal/thermal_zone0/temp'))/1000.00;
    echo round($temperatura,2);
    ?> graus celsius.
</p>

<p><b>CPU:</b>
    <?php
    $uso_cpu = sys_getloadavg();
    echo number_format($uso_cpu[0],2);
    ?>%.
</p>


