<?php
$image_path = '../app/views/pages/';
?>
<div>
    <h1> Функциональная модель структуры организации ИС «Кружок».</h1> 
    <p>Основными участниками процесса обучения являются:</p>

    <ol>
        <li>Обучаемый;</li>
        <li>Преподаватель (тьютер);</li>
        <li>Администрация; </li>
        <li>Информационная система</li>
    </ol>
    <p>Функциональная модель демонстрирует функции участников и их взаимосвязи.
        <img src= "<?php echo $image_path; ?>image/begin_diagram.png" width=50% alt="Функциональная модель ИС Кружок"/></p>
    <p> Рассмотрим функции и обязанности каждого участника более подробно. </p>
    <p>Основная функциональная часть обучаемого представлен в виде блока «Интерфейс Ученик»:</p>

    <p><img src="<?php echo $image_path; ?>image/diagram_client.png" width="50%" alt="Интерфейс Ученик"/><br>
        В него включены следующие элементы. «Управление интерфейсом» - обеспечивает 
        управление действиями обучаемого. Через «Управление интерфейсом» получаем 
        доступ следующим составным частям, как модуль «Личный кабинет» и «Медиа-Мастерская». 
        «Личный кабинет» используется, чтобы посмотреть личные достижения (участие конкурсах, 
        олимпиадах и др.), посмотреть личные работы, выполнение во время посещения кружка. 
        В модуле «Медиа-Мастерская» обучаемый участвует в творческой деятельность кружка. 
        Этот модуль является основным информационной системе «Кружок». Модуль «Медиа-Мастерская» 
        связана с реально существующими помещениями. Все произведения созданные обучаемыми фиксируются в данной мастерской. 
        Их можно загрузить в виде фото, видеосъемки и/или создав информационно-логическую модель непосредственно за компьютером.
    </p>  
    <p>
        «Интерфейс Учитель» – это рабочее место преподавателя. Здесь готовится учебный контент, 
        аттестационные материалы, различные тренажеры, симуляторов, которые будут сохранены в «Базе Знаний».<br>
        <img src="<?php echo $image_path; ?>image/diagram_teacher.png" width="50%"" alt="Интерфейс Учитель"/>

    </p>
    <p>
        С помощью модуля «Интерфейс Администратор» происходит контроль за деятельностью кружковой деятельности.<br>
        <img src="<?php echo $image_path; ?>image/diagram_admin.png" width="50%" alt="Интерфейс Администратор"/>
    </p>
    <p>
        Центральное место занимает «Интерфейс Ядро». Данный модуль является сердцем информационной системы «Кружок». 
        Здесь реализованы все основные API, которые позволять расширять возможности системы. <br> 
        <img src="<?php echo $image_path; ?>image/diagram_Bcomm.png" width="50%" alt="Интерфейс Ядро"/>
    </p>
    <p>
        API ИС «Кружок» должна включать в себя реализацию следующих компонентов:
    </p>
    <ol>
        <li>подсистемы идентификации;</li>
        <li>подсистемы доставки учебного контента;</li>    
        <li>подсистемы организации и проведения аттестации;</li>
        <li>подсистемы организации работы в мастерской;</li>
        <li>подсистемы планирования и проведения вебинаров.</li>
    </ol>
    <p>
        Подсистема идентификации должна реализовывать возможных метода идентификации: 
        внутренний для всех субъектов кружковой работы. Хранение регистрационных данных в базе данных о клиентах.
    </p>
    <p>
        В составе подсистемы доставки учебного контента подсистем должны быть реализованы следующие элементы:
    </p>
    <ol>
        <li>база знаний учебного материала;</li>
        <li>видеохостинг для проведения вебинаров и консультаций;</li>
        <li>симуляторы и тренажеры в медиа-мастерской.</li>
    </ol>
    <p>
        Подсистема доставки учебного контента должна обеспечить: 
    </p>
    <ol>
        <li>удаленный доступ к авторизованным ресурсам;</li>
        <li>доступ к электронным курсам с фиксацией информации о процессе изучения электронного курса обучаемым;</li>
        <li>хранение и предоставление доступа субъектов кружковой работы к программе, плану и учебным материалам кружка </li>
    </ol>
    <p>
        <b>Аттестационный контент</b> должен обеспечить возможность формирования от чета
        о выполнении программы обучения в кружке и аттестации обучающимся.
    </p>
    <p>
       Подсистема организации учебного процесса должна обеспечивать: 
    </p>
    <ol>
        <li>формирование учебного плана;</li>
        <li>возможность автоматической передачи данных другим компонентам среды;</li>
        <li>фиксацию данных о движении обучаемого, выполнения программы кружка.</li>
    </ol>
    <p>
        Подсистема планирования и проведения вебинаров и консультаций должна реализовать:
    </p>
    <ol>
        <li>возможность работы трех и более пользователей в режиме видеоконференции 
            (ведущего вебинар и не менее двух участников вебинара);</li>
        <li>возможность загрузки материала организатором вебинара;</li>
        <li>возможность демонстрировать презентацию;</li>
        <li>возможность демонстрации рабочего стола ведущего;</li>
        <li>возможность проведения опросов с вопросами открытого и закрытого типа;</li>
        <li>возможность онлайн голосования и демонстрации результата голосования.</li>

    </ol>

</div>
<?php

/* 
 * Copyright (C) 2017 sergey
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

