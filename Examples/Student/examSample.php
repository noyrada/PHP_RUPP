<form action="examSample.php" method="post">
    <h1>Create Student Form</h1>
    ID    <input type="text" name="id"><br><br>
    Name  <input type="text" name="name"><br><br>
    Year
    <select name="year">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select><br><br>
    Group
    <select name="group">
        <option value="M">M</option>
        <option value="A">A</option>
        <option value="E">E</option>
    </select><br><br>

    WAD <input type="text" name="wad"><br><br>
    Linux <input type="text" name="linux"><br><br>
    MIS <input type="text" name="mis"><br><br>
    SE <input type="text" name="se"><br><br>
    OOAD <input type="text" name="ooad"><br><br>

    <input type="submit" value="ADD">

</form>

<?php
if(isset($_POST['id'])) {
    //Get post data
    $id     = $_POST['id'];
    $name   = $_POST['name'];
    $year   = $_POST['year'];
    $group  = $_POST['group'];
    $wad    = $_POST['wad'];
    $linux  = $_POST['linux'];
    $mis    = $_POST['mis'];
    $se     = $_POST['se'];
    $ooad   = $_POST['ooad'];

    class Score {
        protected $wad;
        protected $linux;
        protected $mis;
        protected $se;
        protected $ooad;

        public function __construct($wad, $linux, $se, $mis, $ooad) {
            $this->wad   = $wad;
            $this->linux = $linux;
            $this->mis   = $mis;
            $this->se    = $se;
            $this->ooad  = $ooad;
        }

        public function getWad() {
            return $this->wad;
        }

        public function getLinux() {
            return $this->linux;
        }

        public function getSE() {
            return $this->se;
        }

        public function getMIS() {
            return $this->mis;
        }

        public function getOOAD() {
            return $this->ooad;
        }
    }

    class Student extends Score {
        private $id;
        private $name;
        private $groups;
        private $year;

        public function __construct($id, $name, $group, $year, $wad, $linux, $mis, $se, $ooad) {
            parent::__construct($wad, $linux, $mis, $se, $ooad);
            $this->id    = $id;
            $this->name  = $name;
            $this->group = $group;
            $this->year  = $year;
        }

        public function getID() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
        }

        public function getGroup() {
            return $this->group;
        }

        public function getYear() {
            return $this->year;
        }

    }

    //Display data:
    $student = new Student($id, $name, $group, $year, $wad, $linux, $mis, $se, $ooad);

    echo "Student ID: " . $student->getID() . "<br>";
    echo "Name: "       . $student->getName() . "<br>";
    echo "Group: "      . $student->getGroup() . "<br>";
    echo "Year: "       . $student->getYear() . "<br>";
    echo "WAD: "        . $student->getWad() . "<br>";
    echo "Linux: "      . $student->getLinux() . "<br>";
    echo "MIS: "        . $student->getMis() . "<br>";
    echo "SE: "         . $student->getSE() . "<br>";
    echo "OOAD: "       . $student->getOOAD() . "<br>";

}
?>