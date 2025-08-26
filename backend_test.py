#!/usr/bin/env python3

import requests
import sys
from datetime import datetime

class CesiumMarketingAPITester:
    def __init__(self, base_url="http://localhost:8000"):
        self.base_url = base_url
        self.tests_run = 0
        self.tests_passed = 0

    def run_test(self, name, method, endpoint, expected_status, data=None):
        """Run a single API test"""
        url = f"{self.base_url}{endpoint}"
        headers = {'Content-Type': 'application/json', 'Accept': 'application/json'}

        self.tests_run += 1
        print(f"\n🔍 Testing {name}...")
        print(f"   URL: {url}")
        
        try:
            if method == 'GET':
                response = requests.get(url, headers=headers, timeout=10)
            elif method == 'POST':
                response = requests.post(url, json=data, headers=headers, timeout=10)

            success = response.status_code == expected_status
            if success:
                self.tests_passed += 1
                print(f"✅ Passed - Status: {response.status_code}")
                
                # Check if response contains expected content for key pages
                if endpoint == "/" and response.status_code == 200:
                    if "Cesium" in response.text:
                        print("   ✓ Landing page contains Cesium branding")
                    else:
                        print("   ⚠️  Landing page missing Cesium branding")
                        
                elif endpoint == "/blog" and response.status_code == 200:
                    if "blog" in response.text.lower():
                        print("   ✓ Blog page loaded successfully")
                    else:
                        print("   ⚠️  Blog page content may be missing")
                        
            else:
                print(f"❌ Failed - Expected {expected_status}, got {response.status_code}")
                if response.status_code >= 400:
                    print(f"   Error details: {response.text[:200]}...")

            return success, response

        except requests.exceptions.ConnectionError:
            print(f"❌ Failed - Connection Error: Could not connect to {url}")
            print("   Make sure the Laravel server is running on localhost:8000")
            return False, None
        except requests.exceptions.Timeout:
            print(f"❌ Failed - Timeout: Request took longer than 10 seconds")
            return False, None
        except Exception as e:
            print(f"❌ Failed - Error: {str(e)}")
            return False, None

    def test_landing_page(self):
        """Test the main landing page"""
        return self.run_test("Landing Page", "GET", "/", 200)

    def test_services_page(self):
        """Test the services page"""
        return self.run_test("Services Page", "GET", "/services", 200)

    def test_blog_page(self):
        """Test the blog listing page"""
        return self.run_test("Blog Page", "GET", "/blog", 200)

    def test_contact_page(self):
        """Test the contact page"""
        return self.run_test("Contact Page", "GET", "/contact-us", 200)

    def test_our_process_page(self):
        """Test the our process page"""
        return self.run_test("Our Process Page", "GET", "/our-process", 200)

    def test_what_we_offer_page(self):
        """Test the what we offer page"""
        return self.run_test("What We Offer Page", "GET", "/what-we-offer", 200)

    def test_join_team_page(self):
        """Test the join our team page"""
        return self.run_test("Join Our Team Page", "GET", "/join-our-team", 200)

    def test_blog_post(self):
        """Test a specific blog post"""
        return self.run_test("Blog Post", "GET", "/blog/ai-powered-marketing-strategies-igaming", 200)

    def test_contact_form_submission(self):
        """Test contact form submission"""
        contact_data = {
            "name": "Test User",
            "email": "test@example.com",
            "message": "This is a test message for the contact form functionality."
        }
        return self.run_test("Contact Form Submission", "POST", "/contact", 302, contact_data)

    def test_api_blog_posts(self):
        """Test API blog posts endpoint"""
        return self.run_test("API Blog Posts", "GET", "/api/blog-posts", 200)

    def test_api_latest_blog_posts(self):
        """Test API latest blog posts endpoint"""
        return self.run_test("API Latest Blog Posts", "GET", "/api/blog-posts/latest", 200)

def main():
    print("🚀 Starting Cesium Marketing Website Backend Tests")
    print("=" * 60)
    
    # Setup
    tester = CesiumMarketingAPITester()
    
    # Test main pages
    print("\n📄 Testing Main Pages:")
    tester.test_landing_page()
    tester.test_services_page()
    tester.test_blog_page()
    tester.test_contact_page()
    tester.test_our_process_page()
    tester.test_what_we_offer_page()
    tester.test_join_team_page()
    
    # Test blog functionality
    print("\n📝 Testing Blog Functionality:")
    tester.test_blog_post()
    
    # Test API endpoints
    print("\n🔌 Testing API Endpoints:")
    tester.test_api_blog_posts()
    tester.test_api_latest_blog_posts()
    
    # Test form submission
    print("\n📧 Testing Form Submission:")
    tester.test_contact_form_submission()

    # Print results
    print("\n" + "=" * 60)
    print(f"📊 Test Results: {tester.tests_passed}/{tester.tests_run} tests passed")
    
    if tester.tests_passed == tester.tests_run:
        print("🎉 All tests passed! Backend is working correctly.")
        return 0
    else:
        failed_tests = tester.tests_run - tester.tests_passed
        print(f"⚠️  {failed_tests} test(s) failed. Check the issues above.")
        return 1

if __name__ == "__main__":
    sys.exit(main())