@extends('frontend.index')
@section('meta_content')
    @foreach($content as $key=>$value)
        <meta {{ $value->keyword_en }} content="{{ $value->description_en }}"/>
    @endforeach
@endsection
@section('content')
  <main>

        <!-- Terms of Service section start from here -->
        <section class="termsservice_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-4 termsservice_leftmain" id="nav" data-spy="affix"
                        data-offset-top="197">
                        <ul class="termsservice_leftwrapper list-group">
                            <li>
                                <a class="list-group-item active" data-id="section1" href="#section1">
                                    Description
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item" data-id="section2" href="#section2">
                                    Interpretation and Definitions
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item" data-id="section3" href="#section3">
                                    Collecting and Using Your Personal Data
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item" data-id="section4" href="#section4">
                                    Children's Privacy
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item" data-id="section5" href="#section5">
                                    Links to Other Websites
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item" data-id="section6" href="#section6">
                                    Changes to this Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item" data-id="section7" href="#section7">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8 termsservice_rightmain">
                        <div id="section1" class="mb-5 pb-md-2 pb-lg-4 pb-xl-5">
                            <h1 class="subbanner-title mb-2">
                                Privacy
                                <span>Policy</span>
                            </h1>
                            <p class="small_paraphrase mb-4">Last updated: March 01, 2023</p>
                            <p class="mb-0">
                                This Privacy Policy describes Our policies and procedures on the collection, use and
                                disclosure of Your information when You use the Service and tells You about Your privacy
                                rights and how the law protects You.
                                <br>
                                <br>
                                We use Your Personal data to provide and improve the Service. By using the Service, You
                                agree to the collection and use of information in accordance with this Privacy Policy.
                                This Privacy Policy has been created with the help of the Free Privacy Policy Generator.
                            </p>
                        </div>
                        <div id="section2" class="mb-5 pb-md-2 pb-lg-4 pb-xl-5">
                            <div class="heading_intro">
                                <h2 class="mb-md-4 mb-3 pb-1">Interpretation and Definitions</h2>
                                <h3 class="mb-3 fw-600">Interpretation</h3>
                                <p class="mb-4 pb-1 pb-md-3">
                                    The words of which the initial letter is capitalized have meanings defined under the
                                    following conditions. The following definitions shall have the same meaning
                                    regardless of whether they appear in singular or in plural.
                                </p>
                                <h3 class="mb-3 fw-600">Definitions</h3>
                                <p class="pb-1">
                                    For the purposes of this Privacy Policy:
                                </p>
                                <ul>
                                    <li>
                                        <p class="pb-1">
                                            <b> Account </b> means a unique account created for You to access our
                                            Service or parts of our Service.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b> Affiliate </b> means an entity that controls, is controlled by
                                            or is under common control with a party, where "control" means ownership of
                                            50% or more of the shares, equity interest or other securities entitled to
                                            vote for election of directors or other managing authority.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b> Company </b> (referred to as either "the Company", "We", "Us"
                                            or "Our" in this Agreement) refers to ETHRUW WORLDWIDE LLC, 1 Central St
                                            Middleton, MA 02949.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>Cookies</b> are small files that are placed on Your computer, mobile
                                            device or
                                            any other device by a website, containing the details of Your browsing
                                            history on that website among its many uses.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>Country</b> refers to: Massachusetts, United States
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>Device</b> means any device that can access the Service such as a
                                            computer, a cellphone or a digital tablet.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>Personal</b> Data is any information that relates to an identified or
                                            identifiable individual.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>Service</b> refers to the Website.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>Service Provider</b> means any natural or legal person who
                                            processes the data on behalf of the Company. It refers to third-party
                                            companies or individuals employed by the Company to facilitate the Service,
                                            to provide the Service on behalf of the Company, to perform services related
                                            to the Service or to assist the Company in analyzing how the Service is
                                            used.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>Third-party Social Media Service </b> refers to any
                                            website or any social network website through which a User can log in or
                                            create an account to use the Service.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>Usage Data </b> refers to data collected
                                            automatically, either generated by the use of the Service or from the
                                            Service infrastructure itself (for example, the duration of a page visit).
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>Website</b> refers to Topbrandmate, accessible from
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>You</b>
                                            means the individual accessing or using the Service, or the company, or
                                            other legal entity on behalf of which such individual is accessing or using
                                            the Service, as applicable.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="section3" class="mb-5 pb-md-2 pb-lg-4 pb-xl-5">
                            <div class="heading_intro">
                                <h2 class="mb-3 mb-md-4 pb-1">Collecting and Using Your Personal Data</h2>
                                <h3 class="mb-3 pb-1">Types of Data Collected:</h3>
                                <h4 class="mb-3 fw-600">Personal Data</h4>
                                <p class="mb-3 pb-1">
                                    While using Our Service, We may ask You to provide Us with certain personally
                                    identifiable information that can be used to contact or identify You. Personally
                                    identifiable information may include, but is not limited to:
                                </p>
                                <ul class="mb-4 pb-1 pb-md-3">
                                    <li>
                                        <p class="pb-1">
                                            Email address
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            First name and last name
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            Phone number
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            Address, State, Province, ZIP/Postal code, City
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            Usage Data
                                        </p>
                                    </li>
                                </ul>
                                <h4 class="mb-3 fw-600">Usage Data</h4>
                                <p class="mb-4 pb-1 pb-md-3">
                                    Usage Data is collected automatically when using the Service.
                                    <br>
                                    <br>
                                    Usage Data may include information such as Your Device's Internet Protocol
                                    address (e.g. IP address), browser type, browser version, the pages of our
                                    Service that You visit, the time and date of Your visit, the time spent on
                                    those pages, unique device identifiers and other diagnostic data.
                                    <br>
                                    <br>
                                    When You access the Service by or through a mobile device, We may collect
                                    certain information automatically, including, but not limited to, the type
                                    of mobile device You use, Your mobile device unique ID, the IP address of
                                    Your mobile device, Your mobile operating system, the type of mobile
                                    Internet browser You use, unique device identifiers and other diagnostic
                                    data.
                                    <br>
                                    <br>
                                    We may also collect information that Your browser sends whenever You visit
                                    our Service or when You access the Service by or through a mobile device.
                                </p>
                                <h4 class="mb-3 fw-600">Information from Third-Party Social Media Services</h4>
                                <p class="mb-3 pb-1">
                                    The Company allows You to create an account and log in to use the
                                    Service through the following Third-party Social Media Services:
                                </p>
                                <ul class="mb-3">
                                    <li>
                                        <p class="pb-1">
                                            Google
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            Facebook
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            Twitter
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            LinkedIn
                                        </p>
                                    </li>
                                </ul>
                                <p class="mb-4 pb-4">
                                    If You decide to register through or otherwise grant us access to a Third-Party
                                    Social Media Service, We may collect Personal data that is already associated with
                                    Your Third-Party Social Media Service's account, such as Your name, Your email
                                    address, Your activities or Your contact list associated with that account.
                                    <br>
                                    <br>
                                    You may also have the option of sharing additional information with the Company
                                    through Your Third-Party Social Media Service's account. If You choose to provide
                                    such information and Personal Data, during registration or otherwise, You are giving
                                    the Company permission to use, share, and store it in a manner consistent with this
                                    Privacy Policy.
                                </p>
                                <h4 class="mb-3 fw-600">Tracking Technologies and Cookies</h4>
                                <p class="mb-3">
                                    We use Cookies and similar tracking technologies to track the activity on Our
                                    Service and store certain information. Tracking technologies used are beacons, tags,
                                    and scripts to collect and track information and to improve and analyze Our Service.
                                    The technologies We use may include:
                                </p>
                                <ul class="mb-3">
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">Cookies or Browser Cookies.</b> A cookie is a small file
                                            placed on Your Device.
                                            You can instruct Your browser to refuse all Cookies or to indicate when a
                                            Cookie is being sent. However, if You do not accept Cookies, You may not be
                                            able to use some parts of our Service. Unless you have adjusted Your browser
                                            setting so that it will refuse Cookies, our Service may use Cookies.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b>Web Beacons.</b> Certain sections of our Service and our emails may
                                            contain
                                            small electronic files known as web beacons (also referred to as clear gifs,
                                            pixel tags, and single-pixel gifs) that permit the Company, for example, to
                                            count users who have visited those pages or opened an email and for other
                                            related website statistics (for example, recording the popularity of a
                                            certain section and verifying system and server integrity).
                                        </p>
                                    </li>
                                </ul>
                                <p class="mb-3">
                                    Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on Your
                                    personal computer or mobile device when You go offline, while Session Cookies are
                                    deleted as soon as You close Your web browser. Learn more about cookies on the
                                    <u>Free
                                        Privacy Policy website</u> article.
                                </p>
                                <p>
                                    We use both Session and Persistent Cookies for the purposes set out below:
                                </p>
                                <ul class="mb-3 pb-2">
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">Necessary / Essential Cookies</b>
                                        </p>
                                        <p>
                                            Type: Session Cookies
                                        </p>
                                        <p>
                                            Administered by: Us
                                        </p>
                                        <p>
                                            Purpose: These Cookies are essential to provide You with services available
                                            through the Website and to enable You to use some of its features. They help
                                            to authenticate users and prevent fraudulent use of user accounts. Without
                                            these Cookies, the services that You have asked for cannot be provided, and
                                            We only use these Cookies to provide You with those services.
                                        </p>
                                    </li>
                                </ul>
                                <ul class="mb-3 pb-2">
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">Cookies Policy / Notice Acceptance Cookies</b>
                                        </p>
                                        <p>
                                            Type: Persistent Cookies
                                        </p>
                                        <p>
                                            Administered by: Us
                                        </p>
                                        <p>
                                            Purpose: These Cookies identify if users have accepted the use of cookies on
                                            the Website.
                                        </p>
                                    </li>
                                </ul>
                                <ul class="mb-3">
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">Functionality Cookies</b>
                                        </p>
                                        <p>
                                            Type: Persistent Cookies
                                        </p>
                                        <p>
                                            Administered by: Us
                                        </p>
                                        <p>
                                            Purpose: These Cookies allow us to remember choices You make when You use
                                            the Website, such as remembering your login details or language preference.
                                            The purpose of these Cookies is to provide You with a more personal
                                            experience and to avoid You having to re-enter your preferences every time
                                            You use the Website.
                                        </p>
                                    </li>
                                </ul>
                                <p class="mb-5">
                                    For more information about the cookies we use and your choices regarding cookies,
                                    please visit our Cookies Policy or the Cookies section of our Privacy Policy.
                                </p>
                                <h3 class="mb-3 pb-1">Use of Your Personal Data</h3>
                                <p>
                                    The Company may use Personal Data for the following purposes:
                                </p>
                                <ul class="mb-3">
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">To provide and maintain our Service,</b>
                                            including to monitor the usage of our Service.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">To manage Your Account:</b>
                                            to manage Your registration as a user of the
                                            Service. The Personal Data You provide can give You access to different
                                            functionalities of the Service that are available to You as a registered
                                            user.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">For the performance of a contract:</b>
                                            the development, compliance and
                                            undertaking of the purchase contract for the products, items or services You
                                            have purchased or of any other contract with Us through the Service.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600"> To contact You:</b>
                                            To contact You by email, telephone calls, SMS, or other
                                            equivalent forms of electronic communication, such as a mobile application's
                                            push notifications regarding updates or informative communications related
                                            to the functionalities, products or contracted services, including the
                                            security updates, when necessary or reasonable for their implementation.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600"> To provide You</b>
                                            with news, special offers and general information about other
                                            goods, services and events which we offer that are similar to those that you
                                            have already purchased or enquired about unless You have opted not to
                                            receive such information.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600"> To manage Your requests:</b>
                                            To attend and manage Your requests to Us.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">For business transfers:</b>
                                            We may use Your information to evaluate or conduct a
                                            merger, divestiture, restructuring, reorganization, dissolution, or other
                                            sale or transfer of some or all of Our assets, whether as a going concern or
                                            as part of bankruptcy, liquidation, or similar proceeding, in which Personal
                                            Data held by Us about our Service users is among the assets transferred.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">For other purposes:</b>
                                            We may use Your information for other purposes, such as
                                            data analysis, identifying usage trends, determining the effectiveness of
                                            our promotional campaigns and to evaluate and improve our Service, products,
                                            services, marketing and your experience.
                                        </p>
                                    </li>
                                </ul>
                                <p class="pb-1">
                                    We may share Your personal information in the following situations:
                                </p>
                                <ul class="mb-4 pb-3">
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">With Service Providers:</b>
                                            We may share Your personal information with Service Providers to monitor and
                                            analyze the use of our Service, to contact You.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">For business transfers:</b>
                                            We may share or transfer Your personal information
                                            in connection with, or during negotiations of, any merger, sale of Company
                                            assets, financing, or acquisition of all or a portion of Our business to
                                            another company.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">With Affiliates:</b>
                                            We may share Your information with Our affiliates, in which
                                            case we will require those affiliates to honor this Privacy Policy.
                                            Affiliates include Our parent company and any other subsidiaries, joint
                                            venture partners or other companies that We control or that are under common
                                            control with Us.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">With business partners:</b>
                                            We may share Your information with Our business
                                            partners to offer You certain products, services or promotions.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">With other users:</b>
                                            When You share personal information or otherwise interact
                                            in the public areas with other users, such information may be viewed by all
                                            users and may be publicly distributed outside. If You interact with other
                                            users or register through a Third-Party Social Media Service, Your contacts
                                            on the Third-Party Social Media Service may see Your name, profile, pictures
                                            and description of Your activity. Similarly, other users will be able to
                                            view descriptions of Your activity, communicate with You and view Your
                                            profile.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pb-1">
                                            <b class="fw-600">With Your consent:</b>
                                            With Your consent: We may disclose Your personal information for any other
                                            purpose with Your consent.
                                        </p>
                                    </li>
                                </ul>
                                <h3 class="mb-3 pb-1">Retention of Your Personal Data</h3>
                                <p class="mb-4 pb-3">
                                    The Company will retain Your Personal Data only for as long as is necessary for the
                                    purposes set out in this Privacy Policy. We will retain and use Your Personal Data
                                    to the extent necessary to comply with our legal obligations (for example, if we are
                                    required to retain your data to comply with applicable laws), resolve disputes, and
                                    enforce our legal agreements and policies.
                                    <br>
                                    <br>
                                    The Company will also retain Usage Data for internal analysis purposes. Usage Data
                                    is generally retained for a shorter period of time, except when this data is used to
                                    strengthen the security or to improve the functionality of Our Service, or We are
                                    legally obligated to retain this data for longer time periods.
                                </p>
                                <h3 class="mb-3 pb-1">Transfer of Your Personal Data</h3>
                                <p class="mb-4 pb-3">
                                    Your information, including Personal Data, is processed at the Company's operating
                                    offices and in any other places where the parties involved in the processing are
                                    located. It means that this information may be transferred to — and maintained on —
                                    computers located outside of Your state, province, country or other governmental
                                    jurisdiction where the data protection laws may differ than those from Your
                                    jurisdiction.
                                    <br>
                                    <br>
                                    Your consent to this Privacy Policy followed by Your submission of such information
                                    represents Your agreement to that transfer.
                                    <br>
                                    <br>
                                    The Company will take all steps reasonably necessary to ensure that Your data is
                                    treated securely and in accordance with this Privacy Policy and no transfer of Your
                                    Personal Data will take place to an organization or a country unless there are
                                    adequate controls in place including the security of Your data and other personal
                                    information.
                                </p>
                                <h3 class="mb-3 pb-1">Delete Your Personal Data</h3>
                                <p class="mb-4 pb-3">
                                    You have the right to delete or request that We assist in deleting the Personal Data
                                    that We have collected about You.
                                    <br>
                                    <br>
                                    Our Service may give You the ability to delete certain information about You from
                                    within the Service.
                                    <br>
                                    <br>
                                    You may update, amend, or delete Your information at any time by signing in to Your
                                    Account, if you have one, and visiting the account settings section that allows you
                                    to manage Your personal information. You may also contact Us to request access to,
                                    correct, or delete any personal information that You have provided to Us.
                                    <br>
                                    <br>
                                    Please note, however, that We may need to retain certain information when we have a
                                    legal obligation or lawful basis to do so.
                                </p>
                                <h3 class="mb-3 pb-1">Disclosure of Your Personal Data</h3>
                                <h4 class="mb-3 fw-600">Business Transactions</h4>
                                <p class="mb-3 pb-3">
                                    If the Company is involved in a merger, acquisition or asset sale, Your Personal
                                    Data may be transferred. We will provide notice before Your Personal Data is
                                    transferred and becomes subject to a different Privacy Policy.
                                </p>
                                <h4 class="mb-3 fw-600">Law enforcement</h4>
                                <p class="mb-3 pb-3">
                                    Under certain circumstances, the Company may be required to disclose Your Personal
                                    Data if required to do so by law or in response to valid requests by public
                                    authorities (e.g. a court or a government agency).
                                </p>
                                <h4 class="mb-3 fw-600">Other legal requirements</h4>
                                <p class="mb-3">
                                    The Company may disclose Your Personal Data in the good faith belief that such
                                    action is necessary to:
                                </p>
                                <ul class="mb-5">
                                    <li>
                                        <p class="mb-3">
                                            Comply with a legal obligation
                                        </p>
                                    </li>
                                    <li>
                                        <p class="mb-3">
                                            Protect and defend the rights or property of the Company
                                        </p>
                                    </li>
                                    <li>
                                        <p class="mb-3">
                                            Prevent or investigate possible wrongdoing in connection with the Service
                                        </p>
                                    </li>
                                    <li>
                                        <p class="mb-3">
                                            Protect the personal safety of Users of the Service or the public
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Protect against legal liability
                                        </p>
                                    </li>
                                </ul>
                                <h3 class="mb-3 pb-1">Security of Your Personal Data</h3>
                                <p>
                                    The security of Your Personal Data is important to Us, but remember that no method
                                    of transmission over the Internet, or method of electronic storage is 100% secure.
                                    While We strive to use commercially acceptable means to protect Your Personal Data,
                                    We cannot guarantee its absolute security.
                                </p>
                            </div>
                        </div>
                        <div id="section4" class="mb-5 pb-md-2 pb-lg-4 pb-xl-5">
                            <div class="heading_intro">
                                <h2 class="mb-3 mb-md-4 pb-1">Children's Privacy</h2>
                                <p class="mb-0">
                                    Our Service does not address anyone under the age of 13. We do not knowingly collect
                                    personally identifiable information from anyone under the age of 13. If You are a
                                    parent or guardian and You are aware that Your child has provided Us with Personal
                                    Data, please contact Us. If We become aware that We have collected Personal Data
                                    from anyone under the age of 13 without verification of parental consent, We take
                                    steps to remove that information from Our servers.
                                    <br>
                                    <br>
                                    If We need to rely on consent as a legal basis for processing Your information and
                                    Your country requires consent from a parent, We may require Your parent's consent
                                    before We collect and use that information.
                                </p>
                            </div>
                        </div>
                        <div id="section5" class="mb-5 pb-md-2 pb-lg-4 pb-xl-5">
                            <div class="heading_intro">
                                <h2 class="mb-3 mb-md-4 pb-1">Links to Other Websites</h2>
                                <p class="mb-0">
                                    Our Service may contain links to other websites that are not operated by Us. If You
                                    click on a third party link, You will be directed to that third party's site. We
                                    strongly advise You to review the Privacy Policy of every site You visit.
                                    <br>
                                    <br>
                                    We have no control over and assume no responsibility for the content, privacy
                                    policies or practices of any third party sites or services.
                                </p>
                            </div>
                        </div>
                        <div id="section6" class="mb-5 pb-md-2 pb-lg-4 pb-xl-5">
                            <div class="heading_intro">
                                <h2 class="mb-3 mb-md-4 pb-1">Changes to this Privacy Policy</h3>
                                <p class="mb-0">
                                    We may update Our Privacy Policy from time to time. We will notify You of any
                                    changes by posting the new Privacy Policy on this page.
                                    <br>
                                    <br>
                                    We will let You know via email and/or a prominent notice on Our Service, prior to
                                    the change becoming effective and update the "Last updated" date at the top of this
                                    Privacy Policy.
                                    <br>
                                    <br>
                                    You are advised to review this Privacy Policy periodically for any changes. Changes
                                    to this Privacy Policy are effective when they are posted on this page.
                                </p>
                            </div>
                        </div>
                        <div id="section7" class="mb-5 pb-md-2 pb-lg-4 pb-xl-5">
                            <div class="heading_intro">
                                <h2 class="mb-3 mb-md-4 pb-1">Contact Us</h3>
                                <p class="mb-3">
                                    If you have any questions about this Privacy Policy, You can contact us:
                                </p>
                                <ul>
                                    <li>
                                        <p class="mb-0">
                                            By email: contact@ethruw.com
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div>
                            <a href="" class="primary-btn justify-content-center min-w-190 me-3 me-sm-4">
                                I Agree
                            </a>
                            <a href="" class="primaryline-btn justify-content-center min-w-190">
                                <span>Decline</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Terms of Service section end from here -->

    </main>

    @endsection
