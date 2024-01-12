<?php
if (isset($_POST['show']) && $_POST['show'] == 'rangking') { ?>
    <div class="form-group">
        <label>Kategori prestasi akademik pararel</label>
        <select id="peringkat" name="peringkat" class="form-control" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>
    <div class="form-group">
        <label>Apakah Anda memiliki hafalan Al-Quran?</label>
        <select id="hafal" name="hafal" onchange="Apahafal();" class="form-control" required>
            <option value="Tidak">Tidak</option>
            <option value="Ya">Ya</option>
        </select>
    </div>
<?php } else if (isset($_POST['show']) && $_POST['show'] == 'hafal') { ?>
    <div class="form-group">
        <label>Hingga saat ini berpa jumlah hafalannya?</label>
        <select id="jmljuz" name="jmljuz" class="form-control" required>
            <option value="Kurang dari 5 juz">Kurang dari 5 juz</option>
            <option value="Lebih dari 5 juz">Lebih dari 5 juz</option>
        </select>
    </div>

<?php } else {
} ?>