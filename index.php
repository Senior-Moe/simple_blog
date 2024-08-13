<?php include "template/header.php"; ?>
<style>
.cont {
  background: url(/images/Nv2.gif);
  background-color: #212121;
  display: flex;
  justify-content: center;
  align-content: center;
  -webkit-box-shadow: 0px 0px 11px 0px rgba(226,226,226,1);
  -moz-box-shadow: 0px 0px 11px 0px rgba(226,226,226,1);
  box-shadow: 0px 0px 11px 0px rgba(226,226,226,1);
 }
.title_header {
  background-color: #f5f5f5;
  background-size: 100%;
  -webkit-background-clip: text;
  -moz-background-clip: text;
  -webkit-text-fill-color: transparent;
  -moz-text-fill-color: transparent;
  margin: 2%;
  text-align: center;
  font-size: 2.5rem;
  font-family: 'Noto Naskh Arabic', serif;
 }
.card_Ext_Job {
  border: 1px solid #9e9e9e;
  margin: 5%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 90%;
  background-color: #e0e0e0;
  border-radius: 18px;
}

.card_Ext_Job:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container_Ext_Job {
  padding: 2px 16px;
  text-align: center;
  font-family: 'Noto Naskh Arabic', serif;
   direction: rtl;
   font-size: 115%;
}
.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #f1f1f1;
  margin: 1%;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}
.status {
  display: flex;
  background-color: #e0e0e0;
  justify-content: center;
  width: 90%;
  margin-bottom: 5%;
  margin-left: auto;
  margin-right: auto;
  border-radius: 19px;
  font-family: 'Noto Naskh Arabic', serif;
 }
.status_filed p {
    direction: rtl;
    text-align: center;
    padding: 5%;
}
</style>
    <!-- Hero Section -->
    <div class="hero__continer">
        <h1>مدونة سنيور مو تحتوي على:<br /><span class="auto-type"></span></h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
    var typed = new Typed(".auto-type", {
    strings: ["برمجة" , "مقالات عامة" , "محاسبة" , "لينكس" , "بي اس دي" , "خوادم" , "شبكات"],
    typeSpeed: 150,
    backSpeed: 150,
    loop: true
})
</script>
<!-- For External Jobs -->

    <h1 class="title_header"><b>للأعمال الخارجية</b></h1>
  <div class="cont">
    <div class="card_Ext_Job">
      <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Apple_II_Plus%2C_Museum_of_the_Moving_Image.jpg" style="border-radius:18px 18px 0px 0px; width:100%;" alt="computer Apple">
      <div class="container_Ext_Job">
          <p>لإعدادات الخوادم لينكس ولإنشاء المواقع وإعدادات الشبكات في مدينة جدة الرجاء التواصل على البريد الإلكتروني:</p>
   <a href="mailto:mohammed.alnahdi@outlook.com" target="_blank">mohammed.alnahdi@outlook.com</a>
      </div>
   </div>
  </div>


<!-- Status -->

  <h1 class="title_header">شريط الحالة </h1>
<div class="status">
   <div class="status_filed">
   <p>في اليوم الـ106 من الحرب على غزة، تجددت الاشتباكات بين المقاومة الفلسطينية والاحتلال بجباليا وشرق خان يونس، وواصلت قوات الاحتلال ارتكاب المجازر عبر غاراتها الجوية، وقصفها المدفعي مناطق عدة بينها جباليا، وبني سهيلا والزنة وعبسان شرق خان يونس.</p>
    <div class="chip">
      <img src="/images/avatar.jpg" alt="Person" width="96" height="96">
      محمد النهدي
    </div>
   </div>
</div>
<!-- groups Section -->
    <div class="groups" id="groups">
      <h1>المجموعات الفعّالة</h1>
      <div class="groups__wrapper">
        <div class="groups__card">
          <h2>مجموعة الحزمة العربية</h2>
          <img class="groups__img" src="/images/arpackage.jpg" >
          <p>مجموعة تهتم بالبرمجة ولينكس بشكل عام</p>
          <div class="groups__btn"><a href="https://t.me/Ar_Package"><button>اشتراك</button></a></div>
        </div>
        <div class="groups__card">
          <h2>مجموعة آرش لينكس</h2>
          <img class="groups__img" src="/images/ararch.jpg" >
          <p>مجموعة تهتم بتوزيعة آرش لينكس بالعربي</p>
          <div class="groups__btn"><a href="https://t.me/ArchLinux_Arab"><button>اشتراك</button></a></div>
        </div>
        <div class="groups__card">
          <h2>مجموعة سي بلص بلص</h2>
          <img class="groups__img" src="/images/arcplusplus.jpg" >
          <p>مجموعة تهتم بلغة سي بلص بلص ومكتباتها</p>
          <div class="groups__btn"><a href="https://t.me/advanced_cpp_ara"><button>اشتراك</button></a></div>
        </div>
        <div class="groups__card">
          <h2>مجموعة محررات النصوص</h2>
          <img class="groups__img" src="/images/areditor.jpg" >
          <p>مجموعة تهتم بتخصيص محررات النصوص مثل ايماكس و فيم</p>
          <div class="groups__btn"><a href="https://t.me/arabic_programming_editors"><button>اشتراك</button></a></div>
        </div>
      </div>
    </div>
<?php include "template/footer.php"; ?>
