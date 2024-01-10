from flask import Flask, request, redirect
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from plyer import notification
import time
import pyperclip

class RouteAutomation:
    def __init__(self):
        self.app = Flask(__name__)
        self.app.add_url_rule('/run_automation', 'index', self.index, methods=['GET', 'POST'])

    def show_notification(self, message):
        notification.notify(
            title='Rute Telah Dibuat',
            message=message,
            timeout=10
        )

    def copy_to_clipboard(self, text):  
        pyperclip.copy(text)

    def extract_element_value(self, wd, element_xpath):
        WebDriverWait(wd, 10).until(EC.element_to_be_clickable((By.XPATH, element_xpath)))
        element_to_copy = wd.find_element(By.XPATH, element_xpath)

        element_value = element_to_copy.get_attribute("value")
        print("Nilai elemen:", element_value)

        self.copy_to_clipboard(element_value)

    def run_selenium(self, tujuan_1, tujuan_2, tujuan_3):
        option = webdriver.ChromeOptions()
        option.add_argument("--headless=new")
        option.add_argument('--no-sandbox')
        option.add_experimental_option('excludeSwitches', ['enable-logging'])

        service = Service(executable_path=r"Z:\school\SEASON 5\python\chromedriver-win64\chromedriver.exe")
        wd = webdriver.Chrome(service=service, options=option)

        wd.get(f"https://www.google.com/maps/search/{tujuan_1}")

        btn_rute_xpath = "//button[@class='g88MCb S9kvJb ']"
        WebDriverWait(wd, 10).until(EC.presence_of_element_located((By.XPATH, btn_rute_xpath)))
        wd.find_element(By.XPATH, btn_rute_xpath).click()

        input_lokasi_xpath = "//input[@placeholder='Pilih titik awal, atau klik peta...']"
        WebDriverWait(wd, 10).until(EC.presence_of_element_located((By.XPATH, input_lokasi_xpath)))
        input_lokasianda = wd.find_element(By.XPATH, input_lokasi_xpath)
        input_lokasianda.send_keys("Amikom Yogyakarta")
        time.sleep(3)
        input_lokasianda.send_keys(Keys.ENTER)

        WebDriverWait(wd, 5).until(EC.presence_of_element_located((By.XPATH, "//button[@class='fC7rrc xiw3Pd']")))

        btn_add_xpath = "//button[@class='fC7rrc xiw3Pd']"
        wd.find_element(By.XPATH, btn_add_xpath).click()

        self.add_location(wd, tujuan_2)
        self.add_location(wd, tujuan_3)

        btn_menu_xpath = "//button[@class='wR3cXd']"
        WebDriverWait(wd, 10).until(EC.element_to_be_clickable((By.XPATH, btn_menu_xpath)))
        wd.find_element(By.XPATH, btn_menu_xpath).click()

        btn_salin_xpath = "//button[@jsaction='settings.share']"
        WebDriverWait(wd, 10).until(EC.element_to_be_clickable((By.XPATH, btn_salin_xpath)))
        wd.find_element(By.XPATH, btn_salin_xpath).click()

        element_to_copy_xpath = "//input"
        self.extract_element_value(wd, element_to_copy_xpath)

        wd.quit()

        self.show_notification("Silakan paste link di tab baru.")

    def add_location(self, wd, location):
        input_tujuan_xpath = "//input[@placeholder='Pilih tujuan, atau klik peta...']"
        WebDriverWait(wd, 10).until(EC.presence_of_element_located((By.XPATH, input_tujuan_xpath)))
        input_tujuan = wd.find_element(By.XPATH, input_tujuan_xpath)
        input_tujuan.send_keys(location)
        input_tujuan.send_keys(Keys.ENTER)

        btn_add_xpath = "//button[@class='fC7rrc xiw3Pd']"
        wd.find_element(By.XPATH, btn_add_xpath).click()

    def index(self):
        if request.method == 'POST':
            tujuan_1 = request.form['tujuan_1']
            tujuan_2 = request.form['tujuan_2']
            tujuan_3 = request.form['tujuan_3']
            self.run_selenium(tujuan_1, tujuan_2, tujuan_3)

        return redirect('http://localhost/sensor/elements.php')

if __name__ == '__main__':
    route_automation = RouteAutomation()
    route_automation.app.run(debug=True)
