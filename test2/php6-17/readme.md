6. ทำไมถึงอยากเป็นโปรแกรมเมอร์
    - ได้เลือกเรียนสาขานี้มาแล้ว และ ต้องรีบเรียน รีบทำงาน เพื่อ แบ่งเบา ภาระแม่ ที่ส่งเสีย ทั้งผม และ น้อง คนเดียวครับ
    - เหมือนพอได้เรียน ศาสตร์นี้แล้ว จะให้ไปทำอย่างอื่นก็เสียดายความรู้ที่ได้มาตอนเรียน เลยเอามาต่อยอด ตอนทำงานครับ
7. ถ้ามีปัญหาติดขัดในการเขียนโปรแกรม จะทำอย่างไร
    - ค้นหาวิธีแก้ปัญหาในเน็ตก่อน ว่าเราสามารถแก้ไข มันด้วยตัวเองรึเปล่า
    - จากนั้น มองหาคนรอบตัว ว่าใคร พอจะช่วยเรา solve ปัญหานี้
8. อธิบายการทำงาน ในรูปแบบ MVC มาพอสังเขป
    - ตามความเข้าใจ M (model) เป็นส่วนที่ติดต่อกับ db และ เชื่อมต่อกับ C (controlller) เป็นตัวกลางในการเอาข้อมูลจาก M หรือ Request ต่างๆ มา แล้วนำไปแสดงผลที่ V (view) เป็นส่วนแสดงผล กับผู้ใช้งาน ครับ
9. อธิบายการทำงาน Git ยกตัวอย่าง GIT มา 3 เว็บ
    - ในความเข้าใจของผม มันทำงานโดยการ ฝาก sourcecode ไว้ใน server กลางโดยเครื่อง อื่นๆ ที่ต้องการใช้งาน sourcecode นั้นก็สามารถ clone/sync ตัว sourcecode โดยสามารถแตก branch เพื่อทำเป็น version ของ sourcecode ได้
    - github (ผมใช้เก็บ sourcecode ส่วนตัว), gitlab (ผมใช้เก็บ sourcecode ที่เป็นงานของบริษัท เพราะ ที่ทำงานอยู่ตอนนี้มี gitlab ของบริษัทเอง), Microsoft Team Foundation Server (tfs เคยใช้สมัยทำงานปีแรกๆ ใช้เก็บ sourcecode ฝั่ง .net c# )
10. อธิบายการทำงาน Docker
    - ในความเข้าใจของผม มันทำงานโดย ใช้ทรัพทยากรเครื่องนั้นๆ โดยการแบ่ง การทำงานออกมาเป็น container โดย run อยู่บน container engine ของ docker เองโดยแต่ละ container นั้น เราสามารถ run env ได้แตกต่างกันได้ และ การจะสร้าง container ได้เราต้องใช้การสร้าง dockerfile เพื่อทำ docker image เพื่อเอามา run เป็น container
11. อธิบายการทำงานของ Composer
    - ในความเข้าใจของผม มันคล้ายๆเป็นตัวเก็บ library ต่างๆของ php (คล้ายๆ npm ของ node ละมั้งครับ) โดยการจะติดตั้ง lib ต่างๆ จะต้องสร้าง file composer.json ไ ว้โดยในนั้นเก็บชื่อของ lib และ version นั้นๆ จากนั้นก็ run composer install เพื่อทำการติดตั้ง เมื่อติดตั้งเสร็จ ก็ ให้ require ไฟล์ vendor/autoload.php เพื่อเป็นการ include lib ต่างๆเข้าสู่ Project
12. อธิบายการทำงานของ Prepros (Scss)
    - ไม่ทราบครับ
13. ในเวลาที่เราเรียนอยู่มหาลัย จะมีคนเก่งอยู ในห้อง มีทั้งหมดกี่คน
    - ถ้าเอาแบบเก่งเลย เขียนได้ทุกภาษาที่ อจ. สอน ในห้องผม มี 1 คนครับ ( ไม่ใช่ผมนะ :3 )
14. เคยทำงาน Freelance มาก่อนหรือไม่ (ถ้ามี แนบไฟล์ หรือ เว็บงานที่เคยทำ)
    - ไม่เคยครับ
15. เคยใช้ Framework อะไรมาบ้างและบอกเหตุผลที่เลือกใช้
    - Codeigniter เหตุผลที่เลือกใช้เพราะ เป็น php framework ตัวแรกที่เขียนเป็น และต้องทำ Project หนึ่งด้วยเลยเลือกใช้ framework มาใช้ มากกว่า การเขียน php แบบเดิมครับ
    - Laravel เหตุผลที่เลือกใช้เพราะ ตอนนั้น คิดว่าตัวเอง ตันแล้วกับ CI เลยลองเปลี่ยนมาใช้ larvel ดูโดย ช่วงนั้น มันกำลังเป็นที่นิยมเลยอยาก หยิบมาใช้ เพราะ Project ที่ได้รับมาช่วงนั้น มันพอมีเวลาให้ ศึกษามัน และ ก็ พัฒนา Web ไปด้วยพร้อมกัน
    - Cscart (ไม่แน่ใจว่าจะนับไหมนะครับ เพราะมันเป็น tools ที่มี framework ในตัวเองมันเอง) เหตุผลที่เลือกใช้เพราะ ได้รับ Project เกี่ยวกับการทำ Marketplace มา แล้วตัว cscart นี้มันก็ เกิดมาเพื่อทำ Marketplace ด้วยเลยต้องใช้งาน tools ตัวนี้ครับ
    - Wordpress (ไม่แน่ใจว่าจะนับไหมนะครับ เพราะมันเป็น tools ที่มี framework ในตัวเองมันเอง) เหตุผลที่เลือกใช้เพราะ งาน Website แบบแสดงข้อมูล information และ ก็งานที่เป็น e-commerce เริ่มเข้ามา เลยเลือกใช้ตัว wordpress เพราะมันเบา และ พัฒนา ได้ง่ายมี document เยอะครับ
16. Google Page speed คืออะไร เคยใช้หรือไม่
    - ในความเข้าใจของผม มันเป็นตัวให้คะแนน ประสิทธิภาพของ Website , วิเคราะห์ ค่าอะไรหลายๆอย่าง ผมพอจะเคยใช้อยู่บ้าง กับงานที่ลูกค้าซีเรียสเรื่อง ความเร็วโหลดในหน้าแรก เช่นดูค่า TTFB (time to first byte) เพื่อวิเคราะห์ ว่าอาการมันช้าจากอะไร , รูปภาพจุดไหนที่มันใหญ่เกินไป, การ caching header เป็นต้นครับ  
17. การทำ On page Seo ทาอย่างไร
    - ไม่ทราบครับ

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

ผมขออนุญาต ตอบคำถามต่างๆ แบบไม่ได้ research นะครับ ผมพยายามใช้ความรู้ ความเข้าใจ ของตัวเองที่อยู่มาตอบคำถาม อันไหนตอบได้ ก็จะตอบตามที่ผมเข้าใจ ส่วนข้อไหน ที่ผมไม่ได้ตอบ ก็คือ ผมไม่ทราบ หรือ ไม่เคยใช้ครับ ^^ ขอบคุณครับ