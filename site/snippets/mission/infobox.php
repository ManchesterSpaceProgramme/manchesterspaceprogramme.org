<div class="infobox pull-right">
    <h3>Flight Details</h3>
        <?php foreach ($page->infobox()->toStructure() as $p): ?>
            <div>Callsign : <?php echo $p->callsign() ?></div>
            <div>Date : <?php echo $p->datetime() ?></div>
            <div>Location : <?php echo $p->location() ?></div>
            <div>Max Altitude : <?php echo $p->max_altitude() ?></div>
        <?php endforeach; ?>
</div>