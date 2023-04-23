<div class="show">
    <?php $note = $params['note'] ?? null;
    if ($note) : ?>
        <ul>
            <li>ID: <?php echo (int) $note['id'] ?></li>
            <li>Tytuł: <?php echo $note['title'] ?></li>
            <li>Opis: <?php echo $note['description'] ?></li>
            <li>Utworzono: <?php echo (int) $note['created'] ?></li>
            <li>
                <a href="/">
                    <button>Powrót do listy notatek</button>
                </a>
            </li>
        </ul>
    <?php else : ?>
        <div>Brak notatki do wyświetlenia</div>
    <?php endif; ?>
</div>